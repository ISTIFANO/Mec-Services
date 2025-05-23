<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Commentaire;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone',
        'image'
    ];

 protected $table = "users";
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    public function position(){

        return $this->belongsTo(Position::class,'position_id');

    }

    public function role(){

        return $this->belongsTo(Role::class,'role_id');

    }

    public function commanentaire(){

        return $this->hasMany(Commentaire::class);

    }
    public function mechanicien(){
        return $this->hasOne(Mechanic::class);

    }
    
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }

    
    public function message()
{
    return $this->hasMany(Message::class);
}

public function contract(){

    return $this->hasMany(Contract::class);

}

    
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
