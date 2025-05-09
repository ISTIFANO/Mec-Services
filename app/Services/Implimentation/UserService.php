<?php

namespace App\Services\Implimentation;

use Exception;
use App\Enums\Image;
use App\Models\User;
use  App\Enums\Roles;
use App\Helpers\Mapper;
use App\Services\IRole;
use App\Services\IUser;
use App\Models\Mechanic;
use App\Services\IMechanic;
use App\Services\ICompetence;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repository\Interfaces\UserInterface;

class UserService implements IUser
{
    protected IRole $role_service;
    protected UserInterface $user_repositery;
    protected ICompetence $competence_services;
    protected  User $model;
    protected IMechanic $mechanicien_service;


    public function  __construct(IRole $role_service,  UserInterface $user_repositery, User $model, ICompetence $competence_services, IMechanic $mechanicien_service)
    {
        $this->role_service = $role_service;
        $this->user_repositery = $user_repositery;
        $this->model = $model;
        $this->competence_services = $competence_services;
        $this->mechanicien_service = $mechanicien_service;
    }

    public function create($data, $role)
    {

        $role  = $this->role_service->FindByName($role);
        if (!$role) {

            $this->role_service->create($role);
        }
        $user = $this->model;
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->image = Image::CLIENTIMG;
        $user->role()->associate($role);

        $utilisateur = $this->user_repositery->create($user);
        return $utilisateur;
    }


    public function update($data)
    {
        $role = Roles::CLIENT;

        $role  = $this->role_service->FindByName($role);
        if (!$role) {

            $this->role_service->create($role);
        }
        $user =  $this->user_repositery->getUser($data['id']);
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->image = isset($data["image"]) ? $data["image"]->store('images/profile_images', 'public') : null;
        $user->role()->associate($role);
        return  $this->user_repositery->create($user);
    }

    public function findbyOne($name) {}
    public function getVehicules($id)
    {
        $this->user_repositery->getVehicules($id);
    }
    public function delete($id) {}
    public function show()
    {

        return  $this->user_repositery->show();
    }

    public function findByFields($name)
    {

        return  $this->user_repositery->findByFields($name);
    }
    public function findByEmail($email)
    {

        return    $this->user_repositery->findByEmail($email);
    }
    public function store($data)
    {



        // return    $this->user_repositery->findByEmail($email);
    }

    public function FindClient()
    {

        return    $this->user_repositery->FindClient();
    }
    public function getUser($id)
    {

        return    $this->user_repositery->getUser($id);
    }

    public function  SaveMechanicien($user, $data)
    {

        $utilisateur = $this->user_repositery->getUser($user);

        $mecanicien = Mapper::M_user($utilisateur);
        $mecanicien->TouxHoraire = $data["TouxHoraire"];
        $mecanicien->certificat = $data["certificat"];
        $mecanicien->is_active = $data["is_active"];
        $mecanicien->portfolio = $data["specialization"];
        $mecanicien->portfolio = $data["variable_at"];
        $mecanicien->portfolio = $data["variable_to"];
        foreach ($data["competences"] as $competence) {
            $competences = $this->competence_services->findByID($competence);
            $user->competences()->attatch($competences);
        }

        $mecanicien->avis()->associate(0);

        return $this->user_repositery->SaveMechanicien($mecanicien);
    }

    //        public function become_mechanicien($data){

    // return  $this->user_repositery->become_mechanicien();


    //        }
    public function willbemechanicien()
    {

        return  $this->role_service->become_mechanicien();
    }

    public function changrRole($user, $role)
    {
        $mechanicienRole = $this->role_service->FindByName($role);
        $utilisateur = $this->user_repositery->getUser($user);

        $mechanicien  =  $this->mechanicien_service->create($utilisateur, $mechanicienRole);
        return $mechanicien;
    }


    function updateInformation($data)
    {
        try {
            DB::beginTransaction();

            $user = Auth::user();

            if (isset($data['position_id'])) {
                $user->position_id = $data['position_id'];
            }

            if (isset($data['firstname'])) {
                $user->firstname = $data['firstname'];
            }
            if (isset($data['lastname'])) {
                $user->lastname = $data['lastname'];
            }

            if (isset($data['email'])) {
                $user->email = $data['email'];
            }

            if (isset($data['phone'])) {
                $user->phone = $data['phone'];
            }
            if (isset($data['image'])) {
                $user->image = $data["image"]->store('images/profile_images', 'public');
            }
            if ($user->role->name == "mechanicien") {

                $user->save();

                $mechanicien = $user->mechanicien;

                if (!$mechanicien) {
                    $mechanicien = new Mechanic();
                    $mechanicien->user_id = $user->id;
                }

                if (isset($data['certificat'])) {

                    $mechanicien->certificat = $data['certificat']->store('certificates', 'public');
                }
                if (isset($data['experience_years'])) {
                    $mechanicien->experience_years = $data['experience_years'];
                }
                if (isset($data['specialization'])) {
                    $mechanicien->specialization = $data['specialization'];
                }
                if (isset($data['variable_at'])) {
                    $mechanicien->variable_at = $data['variable_at'];
                }
                if (isset($data['variable_to'])) {
                    $mechanicien->variable_to = $data['variable_to'];
                }

                $mechanicien->save();
            } else if ($user->role->name == "client") {
                $user->save();
            }

            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue');
        }
    }
}
