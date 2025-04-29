<?php

namespace App\Repository;

use App\Models\Contract;

class ContractRepositery{






    public function show(){


        return Contract::all();


    }
    public function create($contract){
       
    return $contract->save();
    }
    
    
    public function update($date){




    }
    public function delete($id){




    }
    public function findByName($name){




    }
    public function findByID($id){


        return Contract::where("id","=",$id)->first();


    }
    










}

































?>