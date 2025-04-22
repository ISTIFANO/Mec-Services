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


public function offers()
{
    return $this->belongsToMany(Offre::class, 'offer_tag', 'tag_id', 'offer_id');
}

    


}
