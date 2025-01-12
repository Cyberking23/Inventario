<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // Asegúrate de usar esta clase
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Agrega otros campos y métodos si es necesario
}