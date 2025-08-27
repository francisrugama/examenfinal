<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technican_assignment;
use App\Http\Requests\Technican_assignmentRequest;
use App\Models\Maintenance_record;
use App\Models\Technican;

class Technican_assignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technican_assignments = Technican_assignment::with('maintenance_records', 'technicans')->paginate(10);
        return view('technican_assignments.index', compact('technican_assignments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technican_assignments = new Technican_assignment();
        $maintenance_records = Maintenance_record::all();
        $technicans = Technican::all();
        return view('technican_assignments.create', compact('technican_assignments', 'maintenance_records', 'technicans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Technican_assignmentRequest $request)
    {
        Technican_assignment::create($request->validated());

        return redirect()->route('technican_assignments.index')->with('success', 'Técnico asignado creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $technican_assignments = Technican_assignment::find($id);
        return view('technican_assignments.show', compact('technican_assignments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $technican_assignments = Technican_assignment::find($id);
        $maintenance_records = Maintenance_record::all();
        $technicans = Technican::all();
        return view('technican_assignments.edit', compact('technican_assignments', 'maintenance_records', 'technicans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Technican_assignmentRequest $request, int $id)
    {
        $technican_assignments = Technican_assignment::find($id);
        $technican_assignments->update($request->validated());
        return redirect()->route('technican_assignments.index')->with('updated', 'Técnico asignado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $technican_assignments = Technican_assignment::find($id);
        $technican_assignments->delete();
        return redirect()->route('technican_assignments.index')->with('deleted', 'Técnico asignado eliminada con éxito.');
    }
}
