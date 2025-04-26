<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends User
{
    /** @use HasFactory<\Database\Factories\MechanicFactory> */
    use HasFactory;
    protected $fillable = [
        'certificat',
        'experience_years',
        'specialization',
        'variable_at',
        'variable_to',
        'is_active'
    ];

protected $table="mechaniciens";
    public function user(){

        return $this->belongsTo(User::class,'user_id');

    }

    public function avis(){

        return $this->belongsTo(Avis::class,'avis_id');

    }

}
