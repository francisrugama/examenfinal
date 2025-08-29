<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Http\Requests\ReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::latest()->paginate(10);
        return view('reports.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reports = new Report();
        return view('reports.create', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportRequest $request)
    {
        Report::create($request->validated());

        return redirect()->route('reports.index')->with('success', 'Reporte creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $reports = Report::find($id);
        return view('reports.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $reports = Report::find($id);
        return view('reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReportRequest $request, int $id)
    {
        $reports = Report::find($id);
        $reports->update($request->validated());

        return redirect()->route('reports.index')->with('updated', 'Reporte actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $reports = Report::find($id);
        $reports->delete();

        return redirect()->route('reports.index')->with('deleted', 'Reporte eliminado correctamente.');
    }
}
