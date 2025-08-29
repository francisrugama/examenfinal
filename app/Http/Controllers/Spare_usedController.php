<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spare_used;
use App\Http\Requests\Spare_usedRequest;
use App\Models\Maintenance_record;

class Spare_usedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spare_useds = Spare_used::with('maintenances_record')->paginate(10);
        return view('spare_useds.index', compact('spare_useds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spare_useds = new Spare_used();
        $maintenances_record = Maintenance_record::all();
        return view('spare_useds.create', compact('spare_useds', 'maintenances_record'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Spare_usedRequest $request)
    {
        Spare_used::create($request->validated());

        return redirect()->route('spare_useds.index')->with('success', 'Repuestos usados creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $spare_useds = Spare_used::find($id);
        return view('spare_useds.show', compact('spare_useds'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $spare_useds = Spare_used::find($id);
        $maintenances_record = Maintenance_record::all();
        return view('spare_useds.edit', compact('spare_useds', 'maintenances_record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Spare_usedRequest $request, int $id)
    {
        $spare_useds = Spare_used::find($id);
        $spare_useds->update($request->validated());
        return redirect()->route('spare_useds.index')->with('updated', 'Repuestos usados actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $spare_useds = Spare_used::find($id);
        $spare_useds->delete();
        return redirect()->route('spare_useds.index')->with('deleted', 'Repuestos usados eliminada con éxito.');
    }
}
