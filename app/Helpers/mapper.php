<?php 

namespace App\Helpers;

use App\Models\Role;
use App\Models\User;
use App\Models\Client;
use App\Models\Mechanic;

class Mapper{

/*
 * 
 * 
 * pour mapper object user avec mechanicien
 * 
 * 
 * @return Client
 * 
 * 
 * 
 * 
 */
public static function M_user(User $user, Mechanic $mechanic = null)
{
    if ($mechanic === null) {
        $mechanic = new Mechanic();
    }

    $mechanic->id = $user->id;
    $mechanic->firstname = $user->firstname;
    $mechanic->lastname = $user->lastname;
    $mechanic->password = $user->password;
    $mechanic->phone = $user->phone;
    $mechanic->image = $user->image;

    if ($user->role) {
        $role = Role::find($user->role->id);
        if ($role) {
            $mechanic->role()->associate($role);
        }
    }

    return $mechanic;
}










}

















?>