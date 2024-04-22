<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\AppointmentSlot;
use App\Models\Service;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::with("service", "user", "slots");
        if ($request->has('search') && $request->search != null && $request->search != '') {
            $appointments = $appointments->where('title', 'LIKE', '%' . $request->search . '%');
        }
        $appointments = $appointments->paginate(10);
        if ($request->has("type")) {
            return $appointments;
        }
        return view('dashboard.admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $services = Service::all();
        return view('dashboard.admin.appointments.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'service_id' => 'required',
            'appointment_datetime.*' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    // Check if any datetime value already exists for the service
                    $serviceId = $request->input('service_id');
                    $existingDates = AppointmentSlot::whereHas('appointment', function ($query) use ($serviceId) {
                        $query->where('service_id', $serviceId);
                    })
                        ->whereIn('datetime', $request->input('appointment_datetime'))
                        ->exists();

                    if ($existingDates) {
                        $fail('One or more appointment dates already exist for this service.');
                    }
                },
            ],
        ]);

        // Create the appointment
        $appointment = Appointment::create([
            'user_id' => $request->input('user_id'),
            'service_id' => $request->input('service_id'),
            'notes' => $request->input('notes'),
        ]);

        // Store appointment slots
        foreach ($request->input('appointment_datetime') as $datetime) {
            $appointment->slots()->create([
                'datetime' => $datetime,
            ]);
        }

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment booked successfully.');
    }

    public function checkConflict(Request $request)
    {
        $serviceId = $request->input('service_id');
        $appointmentDatetime = $request->input('appointment_datetime');

        // Check for conflicts in the AppointmentSlot model
        $conflict = AppointmentSlot::whereHas('appointment', function ($query) use ($serviceId, $appointmentDatetime) {
            $query->where('service_id', $serviceId)
                ->where('datetime', $appointmentDatetime);
        })->exists();

        return response()->json(['conflict' => $conflict]);
    }

    public function edit($id)
    {
        $appointment = Appointment::with('slots')->findOrFail($id);
        $services = Service::all();

        return view('dashboard.admin.appointments.edit', compact('appointment', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'service_id' => 'required',
            'appointment_datetime.*' => [
                'required',
                'date',
                Rule::unique('appointment_slots', 'datetime')->ignore($id, 'appointment_id'),
            ],
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'user_id' => $request->user_id,
            'service_id' => $request->service_id,
            'notes' => $request->notes,
            'status' => $request->status ?? 1,
        ]);

        // Delete existing slots and recreate them with the updated datetimes
        $appointment->slots()->delete();
        foreach ($request->input('appointment_datetime') as $datetime) {
            $appointment->slots()->create([
                'datetime' => $datetime,
            ]);
        }

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment updated successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment deleted successfully.');
    }
}
