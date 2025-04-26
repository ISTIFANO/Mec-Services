<?php

namespace App\Models;

use App\Models\Offre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $fillable =["titre","status"];
   protected $table = "services";

    public function offre(){

        return $this->belongsTo(Offre::class,"offer_id");

    }
    public function mechanicien(){

        return $this->belongsTo(Mechanic::class,"mechanicien_id");

    }

    // public function avis(){

    //     return $this->belongsToMany(Avis::class, 'service_avis', 'service_id', 'avis_id');

    // }

    public function user(){

        return $this->belongsTo(User::class,"client_id");

    }
}
