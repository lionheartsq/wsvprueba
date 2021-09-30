<?php

namespace App\Http\Controllers;
use App\Persona;
use App\Persona_rol;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    //
    public function indexMedico(){
        $respuesta = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '1')->orderBy('id','desc')->get();

        $conteo = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '1')->orderBy('id','desc')->count();

        return ['respuesta' => $respuesta];
        }

    public function crearMedico(Request $request)
    {
        $Persona=new Persona();
        $Persona->primerNombre=$request->primerNombre;
        $Persona->segundoNombre=$request->segundoNombre;
        $Persona->primerApellido=$request->primerApellido;
        $Persona->segundoApellido=$request->segundoApellido;
        $Persona->tipoDocumento=$request->tipoDocumento;
        $Persona->numeroDocumento=$request->numeroDocumento;
        $Persona->fechaExpedicion=$request->fechaExpedicion;
        $Persona->save();

        $Persona_rol=new Persona_rol();
        $Persona_rol->tipo=$request->perfil;
        $Persona_rol->idPersona=$Persona->id;;
        $Persona_rol->save();
    }

    public function editarMedico(Request $request)
    {
        $Persona = Persona::findOrFail($request->id);
        $Persona->primerNombre=$request->primerNombre;
        $Persona->segundoNombre=$request->segundoNombre;
        $Persona->primerApellido=$request->primerApellido;
        $Persona->segundoApellido=$request->segundoApellido;
        $Persona->tipoDocumento=$request->tipoDocumento;
        $Persona->numeroDocumento=$request->numeroDocumento;
        $Persona->fechaExpedicion=$request->fechaExpedicion;
        $Persona->save();
    }
    public function eliminarMedico(Request $request)
    {
        $Persona = Persona::findOrFail($request->id);
        $Persona->delete();
    }

}
