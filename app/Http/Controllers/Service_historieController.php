<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_historie;
use App\Http\Requests\Service_historieRequest;
use App\Models\Vehicle;
use App\Models\Maintenance_record;
use App\Models\Report;

class Service_historieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceshistories = Service_historie::with('vehicle', 'maintenance_records', 'reports')->paginate(10);
        return view('service_histories.index', compact('service_histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service_histories = new Service_historie();
        $vehicles = Vehicle::all();
        $maintenance_records = Maintenance_record::all();
        $reports = Report::all();
        return view('service_histories.create', compact('service_histories', 'vehicles', 'maintenance_records', 'reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Service_historieRequest $request)
    {
        Service_historie::create($request->validated());

        return redirect()->route('service_histories.index')->with('success', 'Historial de servicio creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $service_histories = Service_historie::find($id);
        return view('service_histories.show', compact('service_histories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $service_histories = Service_historie::find($id);
        $vehicle = Vehicle::all();
        $maintenance_records = Maintenance_record::all();
        $reports = Report::all();
        return view('service_histories.edit', compact('service_histories', 'vehicles', 'maintenance_records', 'reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service_historieRequest $request, int $id)
    {
        $service_histories = Service_historie::find($id);
        $service_histories->update($request->validated());
        return redirect()->route('service_histories.index')->with('updated', 'Historial de servicio actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $service_histories = Service_historie::find($id);
        $service_histories->delete();
        return redirect()->route('service_histories.index')->with('deleted', 'Historial de servicio eliminada con éxito.');
    }
}
