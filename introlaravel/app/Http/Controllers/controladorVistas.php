<?php

namespace App\Http\Controllers;

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
    public function procesarCliente(Request $peticion){
        //devuelve todo lo que contine la peticion
        return $peticion-> all();
        //laruta de donde se hizo la
        //return $peticion-> path();
        //nos devuelve la url completa de dode se hizo la peticion
        //return $peticion-> url();
        //nos devolvera la ip del lugar donde se hizo la peticion
        //return $peticion-> ip();


    }
    

}
