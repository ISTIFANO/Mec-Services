<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Http\Requests\StoreMechanicRequest;
use App\Http\Requests\UpdateMechanicRequest;
use App\Services\IUser;
use IMechanic;

class MechanicController extends Controller
{

    private IMechanic $mechanicien_services;
private IUser $user_services;
    public function __construct(IMechanic $mechanicien_services, IUser $user_services)
    {
        $this->mechanicien_services = $mechanicien_services;
        $this->user_services = $user_services;
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
    public function store(StoreMechanicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mechanic $mechanic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mechanic $mechanic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMechanicRequest $request, Mechanic $mechanic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {
        //
    }

    public function to_mechanicien()
    {
        
    $user_email = auth()->user()->email; 
   
        $to_mechanicien = $this->mechanicien_services->to_mechanicien($user_email);

        return $to_mechanicien;
        
    }

    public function willbemechanicien(){

        
       return  $this->mechanicien_services->willbemechanicien();
        
    }
}
