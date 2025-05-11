<?php

namespace App\Services\Implimentation;

use App\Models\User;
use App\Services\IRole;
use App\Services\IUser;
use App\Models\Mechanic;

use App\Services\IMechanic;
use Illuminate\Support\Facades\DB;
use App\Repository\Interfaces\MechanicInterface;

class MechanicService implements IMechanic
{
    private IRole $role_service;
    private MechanicInterface $mechanic_repositery;


    public function __construct(IRole $role_service, MechanicInterface $mechanic_repositery)
    {
        $this->role_service = $role_service;
        $this->mechanic_repositery = $mechanic_repositery;

    }
    public function create($user, $role)
    {
        try {
            DB::beginTransaction();

            $user->role()->associate($role);
            $avis = User::find(1);

            $mechanicien = new Mechanic();
            $mechanicien->certificat = null;
            $mechanicien->experience_years = null;
            $mechanicien->specialization = null;
            $mechanicien->variable_at = null;
            $mechanicien->variable_to = null;
            $mechanicien->is_active = false;

            $mechanicien->user()->associate($user);
            $mechanicien->avis()->associate($avis);

            $mechanicien->save();
            DB::commit();
            return $mechanicien;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function store($data)
    {
        $user = User::find($data['user_id']);
        $avis = User::find(1);
        $mechanicien = new Mechanic();
        $mechanicien->certificat = $data['certificat']->store('images/certificates', 'public'); 
        $mechanicien->experience_years = $data['experience_years'];
        $mechanicien->specialization = $data['specialization'];
        $mechanicien->variable_at = $data['variable_at']; 
        $mechanicien->variable_to = $data['variable_to']; 
        $mechanicien->is_active = false;        
        $mechanicien->user()->associate($user);
        $mechanicien->avis()->associate($avis);
       return  $mechanicien->save();

    }
    public function update($data) {

    }

    public function validateMechanicien($data) {

      return $this->mechanic_repositery->validate($data);
    }

    public function delete($id) {

        return $this->mechanic_repositery->delete($id);

    }

    public function show() {

        return $this->mechanic_repositery->getAll();
    }

    public function findByName($name) {}

    public function findByID($id) {

      return   $this->mechanic_repositery->find($id);
    }

    public function to_mechanicien($data)
    {

        $data = array_merge($data, ["status" => true]);

        $mechanicien = $this->role_service->sendPermissionForMechanic($data);

        return $mechanicien;
    }
public function is_mechanicien($id){
return $this->mechanic_repositery->find($id);
}
public function getMechanicien($data){


    return $this->mechanic_repositery->getMechanicien($data);
}
    public function willbemechanicien()
    {

    return $this->role_service->become_mechanicien();
    }

    public function mechanicienInfo($id)
    {
    return  Mechanic::where("user_id","=",$id)->first();
    }
}
