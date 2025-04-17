<?php 

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repository\Interfaces\UserInterface;


class UserRepository implements UserInterface{





    public function create($data,$role){


        $user = new User;
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->image = $data['image'];
        $user->role()->associate($role);
        $user->save();
        return   $user;
    }
    public function delete(){


        
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
    public function findByFields($email){


        $user =  User::where('email', '=', $email)->first();

        return $user;
        
    }


    
}




















?>