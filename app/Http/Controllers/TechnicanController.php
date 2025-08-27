<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technican;
use App\Http\Requests\TechnicanRequest;

class TechnicanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicans = Technican::latest()->paginate(10);
        return view('technicans.index',compact('technicans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technicans = new Technican();
        return view('technicans.create', compact('technicans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TechnicanRequest $request)
    {
        Technican::create($request->validated());

        return redirect()->route('technicans.index')->with('success', 'Técnico creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $technicans = Technican::find($id);
        return view('technicans.show', compact('technicans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $technicans = Technican::find($id);
        return view('technicans.edit', compact('technicans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TechnicanRequest $request, int $id)
    {
        $technicans = Technican::find($id);
        $technicans->update($request->validated());

        return redirect()->route('technicans.index')->with('updated', 'Técnico actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $technicans = Technican::find($id);
        $technicans->delete();

        return redirect()->route('technicans.index')->with('deleted', 'Técnico eliminado correctamente.');
    }
}
