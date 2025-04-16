<?php 

namespace App\DTOs;

use App\Models\User;

class userDTO{


public static function  User(User $user){

    return[ 
    'id'=>$user->id,
    'firstname' =>$user->firstname,
    'lastname'=>$user->lastname,
    'numero' =>$user->numero,
    'image' => $user->image,
    
];
    
}









}
















?>