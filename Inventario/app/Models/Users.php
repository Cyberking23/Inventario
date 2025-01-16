<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;  // Extiende de Authenticatable
use Illuminate\Notifications\Notifiable;  // Añadir Notifiable para la notificación

class Users extends Authenticatable  // Cambia esto
{
    use HasFactory, Notifiable;  // Añadir Notifiable al modelo

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Otros métodos o personalizaciones del modelo
}
