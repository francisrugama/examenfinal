<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use App\Models\Technican;
use App\Models\Client;
use App\Models\Vehicle;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('technican', 'client', 'vehicle')->paginate(10);
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointments = new Appointment();
        $technicans = Technican::all();
        $clients = Client::all();
        $vehicles = Vehicle::all();
        return view('appointments.create', compact('appointments', 'technicans', 'clients', 'vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentRequest $request)
    {
        Appointment::create($request->validated());

        return redirect()->route('appointments.index')->with('success', 'Cita creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointments = Appointment::find($id);
        $technicans = Technican::all();
        $clients = Client::all();
        $vehicles = Vehicle::all();
        return view('appointments.show', compact('appointments', 'technicans', 'clients', 'vehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $appointments = Appointment::find($id);
        $technicans = Technican::all();
        $clients = Client::all();
        $vehicles = Vehicle::all();
        return view('appointments.edit', compact('appointments', 'technicans', 'clients', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentRequest $request, int $id)
    {
        $appointments = Appointment::find($id);
        $appointments->update($request->validated());
        return redirect()->route('appointments.index')->with('updated', 'Cita actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $appointments = Appointment::find($id);
        $appointments->delete();
        return redirect()->route('appointments.index')->with('deleted', 'Cita eliminada con éxito.');
    }
}
