<?php 

namespace App\Helpers;

use App\Models\Role;
use App\Models\User;
use App\Models\Client;

class Mapper{

/*
 * 
 * 
 * pour mapper object user avec client
 * 
 * 
 * @return Client
 * 
 * 
 * 
 * 
 */
public static function M_user(User $user , Client $client){
    
    $client->id = $user->id;
    $client->name = $user->name;
    $client->email = $user->email;
    $client->password = $user->password;
    $client->image = $user->image;
    $role = Role::find($user->role->id);
    $client->role()->associate($role);

    return  $client ;

}










}

















?>