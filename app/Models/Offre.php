<?php

namespace App\Models;

use App\Models\Vehicule;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    /** @use HasFactory<\Database\Factories\OffreFactory> */
    use HasFactory;




    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function vihecule(){
        return $this->belongsTo(Vehicule::class, 'vihecule_id');
    }
    
    public function service(){

        return $this->hasMany(Service::class);

    }
    
    public function user(){

        return $this->hasMany(User::class,"user_id");

    }

    
}
