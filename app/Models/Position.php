<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /** @use HasFactory<\Database\Factories\PositionFactory> */
    use HasFactory;

    protected $table ="positions";

    protected $fillable =["ville","zipcode"];

    public function user(){
        
     return $this->hasMany(User::class);
    }



}
