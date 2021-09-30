<?php

namespace App\Http\Controllers;
use App\Persona;
use App\Persona_rol;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //
    public function indexPaciente(){
        $respuesta = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '2')->orderBy('id','desc')->get();

        $conteo = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '2')->orderBy('id','desc')->count();

        return ['respuesta' => $respuesta];
        }

        public function infoPaciente(Request $request)
        {
            $flag=$request->id;

            $respuesta = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
            ->where('Persona_rol.tipo', '=', '2')->where('Persona.numeroDocumento', '=', $flag)->orderBy('Persona.id','desc')->get();

            if($respuesta->isNotEmpty()){
                return ['respuesta' => $respuesta];
            }
            else{
                $respuesta="No existen registros con este número de documento";
                return ['respuesta' => $respuesta];
            }
        }

        public function crearPaciente(Request $request)
        {
            $flag=$request->numeroDocumento;

            $flagtipo=$request->tipoDocumento;

            $validtipo = Persona::where('Persona.tipoDocumento', '=', $flagtipo)->where('Persona.numeroDocumento', '=', $flag)->get();

            if($validtipo->isNotEmpty()){
                $respuesta="Ya se encuentra registrado un paciente o médico con el tipo y número de documento";
            }
            else{
                $valid = Persona::where('Persona.numeroDocumento', '=', $flag)->get();

                if($valid->isNotEmpty()){
                    $respuesta="Ya se encuentra registrado un paciente o médico con el número de documento.";
                }
                else{
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
                    $Persona_rol->tipo=2;
                    $Persona_rol->idPersona=$Persona->id;;
                    $Persona_rol->save();

                    $respuesta="Ok";
                }
            }

            return ['respuesta' => $respuesta];
        }

    public function editarPaciente(Request $request)
    {
        $flag=$request->id;

        $valid = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '2')->where('Persona.numeroDocumento', '=', $flag)->get();

        if($valid->isNotEmpty()){

            foreach($valid as $valida){
                $identificador = $valida->id;
                }

                $Persona = Persona::findOrFail($identificador);
                $Persona->primerNombre=$request->primerNombre;
                $Persona->segundoNombre=$request->segundoNombre;
                $Persona->primerApellido=$request->primerApellido;
                $Persona->segundoApellido=$request->segundoApellido;
                $Persona->tipoDocumento=$request->tipoDocumento;
                $Persona->fechaExpedicion=$request->fechaExpedicion;
                $Persona->save();

                $respuesta="Ok";
        }
        else{
                $respuesta="No se encuentra registrado un médico con el número de documento.";
        }
        return ['respuesta' => $respuesta];
    }

    public function eliminarPaciente(Request $request)
    {
        $flag=$request->id;

        $valid = Persona::join("Persona_rol","Persona.id","=","Persona_rol.idPersona")
        ->where('Persona_rol.tipo', '=', '2')->where('Persona.numeroDocumento', '=', $flag)->get();

        if($valid->isNotEmpty()){

            foreach($valid as $valida){
                $identificador = $valida->id;
                }

            $validrol = Persona_rol::where('Persona_rol.idPersona', '=', $identificador)->get();
            foreach($validrol as $validarol){
                $identificadorrol = $validarol->id;
                }

            $Personarol = Persona_rol::findOrFail($identificadorrol);
            $Personarol->delete();

            $Persona = Persona::findOrFail($identificador);
            $Persona->delete();

            $respuesta="Ok.";
        }
        else{
            $respuesta="No se encuentra registrado un paciente con el número de documento.";
        }
        return ['respuesta' => $respuesta];
    }
}
