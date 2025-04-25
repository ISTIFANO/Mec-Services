<?php
namespace App\Repository;
use Exception;
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
        return Mechanic::find($id);
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
        dd($data['user_id']);
        try {
            DB::beginTransaction();
            $user = User::where("id", "=", $data['user_id'])->first();
            if ($user) {
            $user->become_mechanicien = false;
            $user->save();
            } else {
            throw new Exception("User not found");
            }

            $mechanicien = Mechanic::where("user_id", "=", $user->id)->first();
            if (!$mechanicien) {
            throw new Exception("User is not a mechanic");
            }

            $mechanicien->is_active = true;
            $mechanicien->save();

            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    }
