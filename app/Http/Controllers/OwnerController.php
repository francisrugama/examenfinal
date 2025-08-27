<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\OwnerRequest;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::latest()->paginate(10);
        return view('owners.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $owners = new Owner();
        return view('owners.create', compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OwnerRequest $request)
    {
        Owner::create($request->validated());

        return redirect()->route('owners.index')->with('success', 'Dueño creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $owners = Owner::find($id);
        return view('owners.show', compact('owners'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $owners = Owner::find($id);
        return view('owners.edit', compact('owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OwnerRequest $request, int $id)
    {
        $owners = Owner::find($id);
        $owners->update($request->validated());

        return redirect()->route('owners.index')->with('updated', 'Dueño actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $owners = Owner::find($id);
        $owners->delete();

        return redirect()->route('owners.index')->with('deleted', 'Dueño eliminado correctamente.');
    }
}
