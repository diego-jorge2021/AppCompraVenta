<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_rol',
        'nombre_usuario',
        'email',
        'password',
        'estado_usuario'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */
}
