<?php

namespace App\Http\Controllers;

use App\Services\IUser;
use App\Models\Mechanic;
use App\Services\IMechanic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMechanicRequest;
use App\Http\Requests\UpdateMechanicRequest;
use App\Services\IRole;
use Illuminate\Contracts\View\View;

class MechanicController extends Controller
{
private IRole $role_services;
    private IMechanic $mechanicien_services;

    public function __construct(IMechanic $mechanicien_services, IRole $role_services)
    {
        $this->mechanicien_services = $mechanicien_services;
        $this->role_services = $role_services;

        // $this->user_services = $user_services;
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
    public function create(Request $request)
    {
        if($this->to_mechanicien()){

        }
         $this->mechanicien_services->store($request->all());

         return redirect('/ThankYou');

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

        $id = auth()->user()->id;

        $data = ["id" => $id];
         $this->mechanicien_services->to_mechanicien($data);

        return back();
    }

    public function validateMechanicien(Request $request)
    {

        $mechanic = $this->mechanicien_services->validateMechanicien($request->user_id);

        $profile = $this->mechanicien_services->mechanicienInfo($mechanic->user_id);

        return View("Pages.mechanicienInfo", compact("profile"));
    }
    public function willbemechanicien(Request $request)
    {
     
        $users = $this->mechanicien_services->willbemechanicien();


        $roles = $this->role_services->show();
        return view("Admin.Utilisateur.ValidateMechanicien", compact("users","roles"));
    }

    public function mechanicienInfo(Request  $request){

$profile = $this->mechanicien_services->mechanicienInfo($request->id);


return View("Pages.mechanicienInfo", compact("profile"));

    }
}
