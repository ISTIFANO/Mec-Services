<?php 

namespace App\Repository;

use App\Models\User;
use App\Enums\Image;
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
    public function findByFields($email){


        $user =  User::where('email', '=', $email)->first();

        return $user;
        
    }


    
}




















?>