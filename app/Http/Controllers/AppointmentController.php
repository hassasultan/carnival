<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::with("service", "user");
        if ($request->has('search') && $request->search != null && $request->search != '') {
            $appointments = $appointments->where('title', 'LIKE', '%' . $request->search . '%');
        }
        // dd($appointments->get()->toArray());
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
        // dd($request->toArray());
        $request->validate([
            'user_id' => 'required',
            'service_id' => 'required',
            'appointment_datetime' => [
                'required',
                'date',
                // Validate that the appointment date does not conflict with existing appointments
                Rule::unique('appointments')->where(function ($query) use ($request) {
                    return $query->where([
                        ['user_id', $request->user_id],
                        ['service_id', $request->service_id],
                        ['appointment_datetime', $request->appointment_datetime],
                    ]);
                }),
            ],
        ]);

        Appointment::create($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment booked successfully.');
    }

    public function checkConflict(Request $request)
    {
        $serviceId = $request->input('service_id');
        $appointmentDatetime = $request->input('appointment_datetime');

        $conflict = Appointment::where('service_id', $serviceId)
            ->where('appointment_datetime', $appointmentDatetime)
            ->exists();

        return response()->json(['conflict' => $conflict]);
    }


    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $services = Service::all(); // Assuming you have a Service model and want to fetch all services

        return view('dashboard.admin.appointments.edit', compact('appointment', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'service_id' => 'required',
            'appointment_datetime' => [
                'required',
                'date',
                // Validate that the appointment date does not conflict with existing appointments
                Rule::unique('appointments')->where(function ($query) use ($request, $id) {
                    return $query->where([
                        ['id', '!=', $id], // Exclude current appointment from conflict check
                        ['user_id', $request->user_id],
                        ['service_id', $request->service_id],
                        ['appointment_datetime', $request->appointment_datetime],
                    ]);
                }),
            ],
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

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
