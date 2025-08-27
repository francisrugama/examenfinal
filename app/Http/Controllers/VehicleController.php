<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(10);
        return view('vehicles.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = new Vehicle();
        return view('vehicles.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->validated());

        return redirect()->route('vehicles.index')->with('success', 'Veiculo creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $vehicles = Vehicle::find($id);
        return view('vehicles.show', compact('vehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $vehicles = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehicleRequest $request, int $id)
    {
        $vehicles = Vehicle::find($id);
        $vehicles->update($request->validated());

        return redirect()->route('vehicles.index')->with('updated', 'Veiculo actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $vehicles = Vehicle::find($id);
        $vehicles->delete();

        return redirect()->route('vehicles.index')->with('deleted', 'Veiculo eliminado correctamente.');
    }
}
