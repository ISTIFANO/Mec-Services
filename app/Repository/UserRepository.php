<?php 

namespace App\Repository;

use App\Models\User;
use App\Enums\Image;
use App\Models\Mechanic;
use Illuminate\Support\Facades\Hash;
use App\Repository\Interfaces\UserInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository implements UserInterface{

    public function create(User $user){

        $user->save();
        return  $user;
    }
    public function delete($id){


        
    }
    
    
    public function update($data,$id){

        $user = User::where("id","=",$id)->update($data);

        return $user;
        
    }
    public function  show(){

        $user = User::all();

        return $user;
        
    }
    
    public function findbyOne($name){


        $user =  User::where('name', '=', $name)->first();

        return $user;
        
    }
    public function findByFields($name){


        $user =  User::where('firstname', '=', $name)->first();

        return $user;
        
    }
    public function findByEmail($email){

        $user =  User::where('email', '=', $email)->first();
       
return $user;
        
    }
    public function getUser($id){

        $user =  User::where('id', '=', $id)->first();
       
return $user;
        
    }

    public function SaveMechanicien(Mechanic $mechanic){

       
return $mechanic->save();
        
    }
    public function FindClient(){
        $users = User::whereHas('role', function ($query) {
            $query->where('name', 'client');
        })->get();
        return $users;
    }

public function become_mechanicien($data){

    $user = User::where("email","=",$data['email'])->first();
    $user->become_mechanicien = false;

 return $user->save();
    
}

public function willbemechanicien(){

    return     User::where("become_mechanicien","=",true)->first();

}
public function getVehicules($id){
    return User::where("id","=",$id)->first();

}
    
}




















?>