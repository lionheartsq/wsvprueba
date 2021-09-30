<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'Persona';

    protected $fillable = ['primerNombre','segundoNombre','primerApellido','segundoApellido','tipoDocumento','numeroDocumento','fechaExpedicion'];

    public $timestamps = false;
}
