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
        $maintenances_record = Maintenance_record::with('vehicle', 'client', 'technican')->paginate(10);
        return view('maintenances_record.index', compact('maintenances_record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maintenances_record = new Maintenance_record();
        $vehicles = Vehicle::all();
        $clients = Client::all();
        $technicians = Technician::all();
        return view('maintenances_record.create', compact('maintenances_record', 'vehicles', 'clients', 'technicians'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Maintenance_recordRequest $request)
    {
        Maintenance_record::create($request->validated());

        return redirect()->route('maintenances_record.index')->with('success', 'Record de mantenimiento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $maintenances_record = Maintenance_record::find($id);
        return view('maintenances_record.show', compact('maintenances_record'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $maintenances_record = Maintenance_record::find($id);
        $vehicles = Vehicle::all();
        $clients = Client::all();
        $technicians = Technician::all();
        return view('maintenances_record.edit', compact('maintenances_record', 'vehicles', 'clients', 'technicians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Maintenance_recordRequest $request, int $id)
    {
        $maintenances_record = Maintenance_record::find($id);
        $maintenances_record->update($request->validated());
        return redirect()->route('maintenances_record.index')->with('updated', 'Record de mantenimiento actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $maintenances_record = Maintenance_record::find($id);
        $maintenances_record->delete();
        return redirect()->route('maintenances_record.index')->with('deleted', 'Record de mantenimiento eliminada con éxito.');
    }
}
