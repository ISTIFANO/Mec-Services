<?php

namespace App\Repository;

use App\Models\Contract;
use App\Repository\Interfaces\ContracInterface;

class ContractRepositery implements ContracInterface{

    public function show(){


        return Contract::with(['service.user', 'service.mechanicien','service'])->select('service_id')->distinct()->get();


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
    
    public function show_pdf_Contract($data){
$contract = Contract::with(['service','service.offre','service.mechanicien.user','service.user','service.offre.vehicule'])->where([
    ["mechanicien_id", "=", $data["mechanicien_id"]],
    ["service_id", "=", $data["service_id"]],
    ["client_id", "=", $data["client_id"]]
])->first();
return $contract;

    }
    










}

































?>