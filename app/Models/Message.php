<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;

    protected $fillable =["message_tex","receiver_id","sender_id"];
    protected $table ="messages";




public function mechanicien(){


    return $this->belongsTo(User::class,"sender_id");
}

public function client(){


    return $this->belongsTo(User::class,"receiver_id");
}


}
