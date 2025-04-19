<?php

namespace App\Services\Implimentation;

use App\Services\IRole;
use  App\Enums\Roles;
use App\Repository\Interfaces\UserInterface;
use App\Services\IUser;

class UserService implements IUser,UserInterface
{
    protected IRole $role_service;
    protected UserInterface $user_repositery;
    public function  __construct( IRole $role_service,  UserInterface $user_repositery)
    {
        $this->role_service = $role_service;
        $this->user_repositery = $user_repositery;
    }

    public function create($data,$role){
        $role  = $this->role_service->FindByName($role);
        if (!$role) {

            $this->role_service->create($role);

        }
        $user = $this->user_repositery->create($data, $role);
        return $user;
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

    public function findByFields($email){
        
        $this->user_repositery->findByFields($email);
    }
}
