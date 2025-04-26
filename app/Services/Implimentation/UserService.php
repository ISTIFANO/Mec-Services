<?php

namespace App\Services\Implimentation;

use App\Enums\Image;
use App\Models\User;
use  App\Enums\Roles;
use App\Helpers\Mapper;
use App\Services\IRole;
use App\Services\IUser;
use Illuminate\Support\Facades\Hash;
use App\Repository\Interfaces\UserInterface;
use App\Services\ICompetence;
use App\Services\IMechanic;

class UserService implements IUser
{
    protected IRole $role_service;
    protected UserInterface $user_repositery;
    protected ICompetence $competence_services;
    protected  User $model;
    protected IMechanic $mechanicien_service ;


    public function  __construct( IRole $role_service,  UserInterface $user_repositery,User $model, ICompetence $competence_services,IMechanic $mechanicien_service )
    {
        $this->role_service = $role_service;
        $this->user_repositery = $user_repositery;
        $this->model= $model;    
        $this->competence_services = $competence_services;
        $this->mechanicien_service = $mechanicien_service;


    }

    public function create($data,$role){
        
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


    public function update($data,$id){




    }

    public function findbyOne($name)
    {
        
    }
    public function getVehicules($id){
        $this->user_repositery->getVehicules($id);
    }
    public function delete($id) {




    }
    public function show() {




    }

    public function findByFields($name){
        
        return  $this->user_repositery->findByFields($name);
    }
    public function findByEmail($email){
        
     return    $this->user_repositery->findByEmail($email);
    }
    public function store($data){
      


        // return    $this->user_repositery->findByEmail($email);
       }

    public function FindClient(){
        
        return    $this->user_repositery->FindClient();
       }
       public function getUser($id){
        
        return    $this->user_repositery->getUser($id);
       }

       public function  SaveMechanicien( $user,$data){

        $utilisateur = $this->user_repositery->getUser($user);

        $mecanicien = Mapper::M_user($utilisateur);
        $mecanicien->TouxHoraire = $data["TouxHoraire"];
        $mecanicien->certificat = $data["certificat"];
        $mecanicien->is_active = $data["is_active"];
        $mecanicien->portfolio = $data["specialization"];
        $mecanicien->portfolio = $data["variable_at"];
        $mecanicien->portfolio = $data["variable_to"];
        foreach($data["competences"] as $competence){
            $competences = $this->competence_services->findByID($competence);
            $user->competences()->attatch($competences);
        }
         
        $mecanicien->avis()->associate(0);

        return $this->user_repositery->SaveMechanicien($mecanicien);

       }

//        public function become_mechanicien($data){

// return  $this->user_repositery->become_mechanicien();


//        }
       public function willbemechanicien(){

        return  $this->role_service->become_mechanicien();
        
        
               }

               public function changrRole($user , $role){
                $mechanicienRole = $this->role_service->FindByName($role);
                $utilisateur = $this->user_repositery->getUser($user);
          
                $mechanicien  =  $this->mechanicien_service->create($utilisateur,$mechanicienRole);
                return $mechanicien;
               }


}
