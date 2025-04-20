<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;



    protected $fillable =["name"];

protected $table ="tags";



    public function offres(){

        return $this->belongsToMany(Offre::class);

    }

    


}
