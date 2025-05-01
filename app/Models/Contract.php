<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /** @use HasFactory<\Database\Factories\ContractFactory> */
    use HasFactory;

    
    protected $fillable =["titre","logo"];

    protected $table="contracts";

    public function mechanicien(){
        return $this->belongsTo(Mechanic::class,"mechanicien_id");
    }
    public function client(){
        return $this->belongsTo(User::class,"client_id");
    }
    public function service(){


        return $this->belongsTo(Service::class,"service_id");
    }
            

}
