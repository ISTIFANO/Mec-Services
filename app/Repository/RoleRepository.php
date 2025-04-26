<?php 

namespace App\Repository;

use App\Models\Role;
use App\Models\User;
use App\Repository\Interfaces\RoleInterface;


class RoleRepository implements RoleInterface{


    public function create($data){


        $role = new Role();
        $role->name = $data['name'];
        $role->save();
        return   $role;
    }


public function update($data,$id){

    $role = Role::where("name","=",$id)->update($data);

    return $role;


}
    public function FindByName($name){

        $role = Role::where("name","=",$name)->first();

        return $role;

        
    }

    public  function become_mechanicien(){

        return     User::where("become_mechanicien","=",true)->get();
    
    }
 

    public function sendPermissionForMechanic($data){
        $user = User::where("id", "=", $data['id'])->first();
    
        if ($user) {
            $user->become_mechanicien = $data['status'];
            $user->save();
        }
        return $user;
    }

  public function show(){

        $role = Role::all();

        return $role;

        
    }


    
}




















?>