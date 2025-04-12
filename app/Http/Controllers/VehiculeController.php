<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Http\Requests\StoreVehiculeRequest;
use App\Http\Requests\UpdateVehiculeRequest;
use App\Repository\VehiculeRepository;

class VehiculeController extends Controller
{
    protected VehiculeRepository $vehicule_repository;

    public function __construct(VehiculeRepository $vehicule_repository)
    {
        $this->vehicule_repository->$vehicule_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculeRequest $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicule $vehicule)
    {
        //
    }
}
