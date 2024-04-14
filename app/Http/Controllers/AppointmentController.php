<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::with("category", "user");
        if ($request->has('search') && $request->search != null && $request->search != '') {
            $appointments = $appointments->where('title', 'LIKE', '%' . $request->search . '%');
        }
        $appointments = $appointments->paginate(10);
        return view('dashboard.admin.appointments.index', compact('appointments'));
    }
    
    public function create()
    {
        return view('appointments.create');
    }
    
    public function store(Request $request)
    {
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
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
