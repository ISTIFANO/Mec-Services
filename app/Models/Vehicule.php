<?php

namespace App\Models;

use App\Models\Offre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicule extends Model
{
    /** @use HasFactory<\Database\Factories\VehiculeFactory> */
    use HasFactory;

    protected $fillable =["name","model","annee_fabrication","year","image"];

    protected $table="vehicules";

    public function offres(){

        return $this->hasMany(Offre::class);

    }

}
