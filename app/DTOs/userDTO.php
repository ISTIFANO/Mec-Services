<?php 

namespace App\DTOs;

use App\Models\User;

class userDTO{


public static function  User(User $user){

    return[ 
    'id'=>$user->id,
    'firstname' =>$user->firstname,
    'lastname'=>$user->lastname,
    'phone' =>$user->phone,
    'image' => $user->image,
    'email' => $user->email
];
    
}









}
















?>