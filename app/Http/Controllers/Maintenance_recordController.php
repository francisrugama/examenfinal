<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance_record;
use App\Http\Requests\Maintenance_recordRequest;
use App\Models\Vehicle;
use App\Models\Client;
use App\Models\Technican;

class Maintenance_recordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenance_records = Maintenance_record::with('vehicle', 'client', 'technican')->paginate(10);
        return view('maintenance_records.index', compact('maintenance_records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maintenance_records = new Maintenance_record();
        $vehicles = Vehicle::all();
        $clients = Client::all();
        $technicans = Technican::all();
        return view('maintenance_records.create', compact('maintenance_records', 'vehicles', 'clients', 'technicans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Maintenance_recordRequest $request)
    {
        Maintenance_record::create($request->validated());
        return redirect()->route('maintenance_records.index')->with('success', 'Record de mantenimiento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $maintenance_records = Maintenance_record::find($id);
        $vehicles = Vehicle::all();
        $clients = Client::all();
        $technicans = Technican::all();
        return view('maintenance_records.show', compact('maintenance_records', 'vehicles', 'clients', 'technicans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $maintenance_records = Maintenance_record::find($id);
        $vehicles = Vehicle::all();
        $clients = Client::all();
        $technicans = Technican::all();
        return view('maintenance_records.edit', compact('maintenance_records', 'vehicles', 'clients', 'technicans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Maintenance_recordRequest $request, int $id)
    {
        $maintenance_records = Maintenance_record::find($id);
        $maintenance_records->update($request->validated());
        return redirect()->route('maintenance_records.index')->with('updated', 'Record de mantenimiento actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $maintenance_records = Maintenance_record::find($id);
        $maintenance_records->delete();
        return redirect()->route('maintenance_records.index')->with('deleted', 'Record de mantenimiento eliminada con éxito.');
    }
}
