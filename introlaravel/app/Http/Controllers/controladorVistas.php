<?php

namespace App\Http\Controllers;


use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;


class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');

    }
    public function formulario(){
        return view('formulario');
        
    }
    public function consulta(){
        return view('cliente');
    }
    public function procesarCliente(validadorClientes $peticionValidada){
        
        //devuelve todo lo que contine la peticion
        //return $peticion-> all();
        //laruta de donde se hizo la
        //return $peticion-> path();
        //nos devuelve la url completa de dode se hizo la peticion
        //return $peticion-> url();
        //nos devolvera la ip del lugar donde se hizo la peticion
        //return $peticion-> ip();
        //respuestas 
        //return redirect()->route('cliente');
        //return back();

      
        //redireccion con valores de session 
        $usuario= $peticionValidada->input('txtnombre');
        session()->flash('exito','se guardo el usuario ' .$usuario);
        return to_route('formulario');


    }
    

}
