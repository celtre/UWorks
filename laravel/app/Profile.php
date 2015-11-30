<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['nombre', 'apellido', 'email', 'fecha_nacimiento','descripcion','pais','celular','ocupacion','foto'];

}
