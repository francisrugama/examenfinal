<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_detail;
use App\Http\Requests\Service_detailRequest;
use App\Models\Technican;
use App\Models\Maintenance_record;

class Service_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_details = Service_detail::with('technican','maintenance_record')->paginate(10);
        return view('services_details.index', compact('service_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service_details = new Service_detail();
        $technicans = Technican::all();
        $maintenance_records = Maintenance_record::all();
        return view('services_details.create', compact('service_details', 'technicans', 'maintenance_records'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Service_detailRequest $request)
    {
        Service_detail::create($request->validated());
        return redirect()->route('service_details.index')->with('success', 'Detalles de servicios creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service_details = Service_detail::find($id);
        $technicans = Technican::all();
        $maintenance_records = Maintenance_record::all();
        return view('services_details.show', compact('service_details', 'technicans', 'maintenance_records'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $service_details = Service_detail::find($id);
        $technicans = Technican::all();
        $maintenance_records = Maintenance_record::all();
        return view('services_details.edit', compact('service_details', 'technicans', 'maintenance_records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service_detailRequest $request, int $id)
    {
        $service_details = Service_detail::find($id);
        $service_details->update($request->validated());
        return redirect()->route('service_details.index')->with('updated', 'Detalles de servicio actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $service_details = Service_detail::find($id);
        $service_details->delete();
        return redirect()->route('service_details.index')->with('deleted', 'Detalles de servicio eliminada con éxito.');
    }
}
