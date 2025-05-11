<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    /** @use HasFactory<\Database\Factories\AvisFactory> */
    use HasFactory;

    protected $fillable =["rating"];

    protected $table="avis";

    public function service(){
        return $this->belongsToMany(Service::class, 'service_avis', 'service_id', 'avis_id');
    }

    // public function user(){
    //     return $this->belongsTo(User::class,"client_id");
    // }

    public function mechanicien(){
        return $this->belongsTo(Mechanic::class,"mechanicien_id");
    }
}
