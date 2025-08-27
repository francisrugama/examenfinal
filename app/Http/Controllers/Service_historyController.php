<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_history;
use App\Http\Requests\Service_historyRequest;
use App\Models\Vehicle;
use App\Models\Maintenance_record;
use App\Models\Report;

class Service_historyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services_historys = Service_history::with('vehicle', 'maintenance_records', 'reports')->paginate(10);
        return view('services_historys.index', compact('services_historys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services_historys = new Service_history();
        $vehicles = Vehicle::all();
        $maintenance_records = Maintenance_record::all();
        $reports = Report::all();
        return view('services_historys.create', compact('services_historys', 'vehicles', 'maintenance_records', 'reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Service_historyRequest $request)
    {
        Service_history::create($request->validated());

        return redirect()->route('services_historys.index')->with('success', 'Historial de servicio creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $services_historys = Service_history::find($id);
        return view('services_historys.show', compact('services_historys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $services_historys = Service_history::find($id);
        $vehicles = Vehicle::all();
        $maintenance_records = Maintenance_record::all();
        $reports = Report::all();
        return view('services_historys.edit', compact('services_historys', 'vehicles', 'maintenance_records', 'reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service_historyRequest $request, int $id)
    {
        $services_historys = Service_history::find($id);
        $services_historys->update($request->validated());
        return redirect()->route('services_historys.index')->with('updated', 'Historial de servicio actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $services_historys = Service_history::find($id);
        $services_historys->delete();
        return redirect()->route('services_historys.index')->with('deleted', 'Historial de servicio eliminada con éxito.');
    }
}
