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



    protected $fillable =["titre","description","budjet","duree_disponibilite","status","image"];

    protected $table="offers";

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'offer_tag', 'offer_id', 'tag_id');
    }
    
    
    public function vehicule(){
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }
    
    public function service(){

        return $this->hasMany(Service::class);

    }
    
    // public function user(){

    //     return $this->hasMany(User::class,"user_id");

    // }

    public function user(){

        return $this->belongsTo(User::class,"client_id");

    }

    
}
