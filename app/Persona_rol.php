<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona_rol extends Model
{
    //
    protected $table = 'Persona_rol';

    protected $fillable = ['tipo','idPersona'];

    public $timestamps = false;
}
