<?php
namespace App\Repository;

use Exception;
use App\Enums\Image;
use App\Enums\Roles;
use App\Models\Role;
use App\Models\User;
use App\Models\Mechanic;
use Illuminate\Support\Facades\DB;
use App\Repository\Interfaces\MechanicInterface;

class MechanicRepository implements MechanicInterface
{
   
    public function getAll()
    {
        return Mechanic::all();
    }

    public function find(int $id)
    {
        return Mechanic::where("user_id" , "=" , $id)->first();
    }

    public function getMechanicien($id){
        return Mechanic::where("id" , "=" , $id)->first();
    }
    public function create(array $data)
    {
        return Mechanic::create($data);
    }

   
    public function update(int $id, array $data)
    {
        $mechanic = Mechanic::find($id);
        if ($mechanic) {
            return $mechanic->update($data);
        }
        return false;
    }

    
    public function delete(int $id)
    {
        $mechanic = Mechanic::find($id);
        if ($mechanic) {
            return $mechanic->delete();
        }
        return false;
    }

    public function validate($data)
    {
        try {
            DB::beginTransaction();
            $user = User::find($data);

            if (!$user) {
                throw new Exception("User not found");
            }

            $role = Role::where("name", Roles::MECHANICIEN)->first();
            if (!$role) {
                throw new Exception("Mechanic role not found");
            }

            $user->become_mechanicien = false;
            $user->image = Image::MechanicIMG;
            $user->role()->associate($role);
            $user->save();

            $mechanicien = Mechanic::where("user_id", $user->id)->first();
            if (!$mechanicien) {
                throw new Exception("User is not a mechanic");
            }

            $mechanicien->is_active = true;
            $mechanicien->save();

            DB::commit();
            return $mechanicien;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    }
