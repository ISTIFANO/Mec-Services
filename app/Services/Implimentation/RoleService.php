<?php
namespace App\Services\Implimentation;

use App\Repository\Interfaces\RoleInterface;
use App\Services\IRole;




class RoleService implements IRole
{

    protected RoleInterface $role_repositery;
    
    public function  __construct( RoleInterface $role_repositery)
    {
        $this->role_repositery = $role_repositery;
    }



    public function create($data){


    $role =$this->role_repositery->create($data);

        return $role;


        
    }
    public function update($data){




        
    }
    public function delete($id){




        
    }
    public function show(){


        $role =$this->role_repositery->show();

        return $role;


        
    }




   public function FindByName($name){

$role = $this->role_repositery->FindByName($name);

return $role;
        
    }

   
}
