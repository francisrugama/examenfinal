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
        $services_details = Service_detail::with('technician','maintenance_record')->paginate(10);
        return view('services_details.index', compact('services_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services_details = new Service_detail();
        $technicians = Technician::all();
        $maintenance_records = Maintenance_record::all();
        return view('service_details.create', compact('services_details', 'technicians', 'maintenance_records'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Service_detailRequest $request)
    {
        Service_detail::create($request->validated());

        return redirect()->route('services_details.index')->with('success', 'Detalles de servicios creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $services_details = Service_detail::find($id);
        return view('services_details.show', compact('services_de tails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $services_details = Service_detail::find($id);
        $technicians = Technician::all();
        $maintenance_records = Maintenance_record::all();
        return view('services_details.edit', compact('services_details', 'technicians', 'maintenance_records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service_detailRequest $request, int $id)
    {
        $services_details = Service_detail::find($id);
        $services_details->update($request->validated());
        return redirect()->route('services_details.index')->with('updated', 'Detalles de servicio actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $services_details = Service_detail::find($id);
        $services_details->delete();
        return redirect()->route('services_details.index')->with('deleted', 'Detalles de servicio eliminada con éxito.');
    }
}
