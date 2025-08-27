<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_history;
use App\Http\Requests\Vehicle_historyRequest;
use App\Models\Owner;
use App\Models\Vehicle;
use App\Models\Client;

class Vehicle_historyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles_historys = Vehicle_history::with('owners', 'vehicles', 'clients')->paginate(10);
        return view('vehicles_historys.index', compact('vehicles_historys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles_historys = new Vehicle_history();
        $owners = Owner::all();
        $vehicles = Vehicle::all();
        $clients = Client::all();
        return view('vehicles_historys.create', compact('vehicles_historys', 'owners', 'vehicles', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Vehicle_historyRequest $request)
    {
        Vehicle_history::create($request->validated());

        return redirect()->route('vehicles_historys.index')->with('success', 'Record de mantenimiento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $vehicles_historys = Vehicle_history::find($id);
        return view('vehicles_historys.show', compact('vehicles_historys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $vehicles_historys = Vehicle_history::find($id);
        $owners = Owner::all();
        $vehicles = Vehicle::all();
        $clients = Client::all();
        return view('vehicles_historys.edit', compact('vehicles_historys', 'owners', 'vehicles', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Vehicle_historyRequest $request, int $id)
    {
        $vehicles_historys = Vehicle_history::find($id);
        $vehicles_historys->update($request->validated());
        return redirect()->route('vehicles_historys.index')->with('updated', 'Record de mantenimiento actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $vehicles_historys = Vehicle_history::find($id);
        $vehicles_historys->delete();
        return redirect()->route('vehicles_historys.index')->with('deleted', 'Record de mantenimiento eliminada con éxito.');
    }
}
