<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {

        $appointments = Appointment::with('patient')->where('doctor_id', Auth::user()->id)->get();
        return view('dashboard.appointment.index', compact('appointments'));
        // return $appointments;
    }

    public function create()
    {
        return view('dashboard.appointment.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'doctor_id' => 'exists:users,id,role,doctor',
            'patient_id' => 'exists:users,id,role,patient',
            'appointment_time' => 'required|date_format:H:i',
            'appointment_date' => 'required|date',

        ]);
        $request['doctor_id'] = auth()->id();

        Appointment::create($request->all());

        return redirect()->route('appointment.index')->with('success', 'Appointment created successfully');
    }

    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        return view('dashboard.appointment.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([]);

        $appointment->update($request->all());

        return redirect()->route('appointment.index')->with('success', 'Appointment updated successfully');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointment.index')->with('success', 'Appointment deleted successfully');
    }

    public function reserveAppointment($appointmentId)
    {

        if (auth()->check() && auth()->user()->role == 'patient') {
            $appointment = Appointment::find($appointmentId);


            if ($appointment && $appointment->status === 'available') {
                $appointment->status = 'reserved';
                $appointment->patient_id = auth()->id();
                $appointment->save();


                return redirect()->back()->with('success', 'Appointment reserved successfully');
            }
        }


        return redirect()->back()->with('error', 'Appointment reserved faild');
    }
    public function updateStatus($id)
    {
        $appointment = Appointment::findOrFail($id);


        $appointment->status = ($appointment->status == 'available') ? 'reserved' : 'available';
        $appointment->save();

        return redirect()->route('appointment.index')->with('success', 'Appointment status updated successfully');
    }
}
