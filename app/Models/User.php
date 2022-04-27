<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable
{
    use HasFactory, Notifiable;

    protected $filllable = [
        "user_id_number",
        "first_name",
        "last_name",
        "user_type_id",
        "url_image",
        "email",
        "password"
    ];

    protected $hidden =[
        "password",
        "remenbr_token"
    ];

    public function getTipo(){
        //relacion usuario y tabla type usuario
        return $this->belongsTo(UserType::class, 'user_type_id','id');
    }
}
