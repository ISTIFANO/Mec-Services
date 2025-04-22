<?php

namespace App\Services\Implimentation;

use App\Enums\Image;
use App\Models\User;
use  App\Enums\Roles;
use App\Services\IRole;
use App\Services\IUser;
use Illuminate\Support\Facades\Hash;
use App\Repository\Interfaces\UserInterface;

class UserService implements IUser
{
    protected IRole $role_service;
    protected UserInterface $user_repositery;

    protected  User $model;


    public function  __construct( IRole $role_service,  UserInterface $user_repositery,User $model)
    {
        $this->role_service = $role_service;
        $this->user_repositery = $user_repositery;
        $this->model= $model;    

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

    public function FindClient(){
        
        return    $this->user_repositery->FindClient();
       }
       public function getUser($id){
        
        return    $this->user_repositery->getUser($id);
       }
}
