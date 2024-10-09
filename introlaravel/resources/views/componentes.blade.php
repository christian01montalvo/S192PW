@extends('layouts.plantilla')
@section('titulo', 'componentes')
@section('contenido')


    <x-card encabezado="componente" titulo="dinamico" textoBoton="enviar"> soy el texto del primer componente    
    </x-card>
    <x-card encabezado="componente2" titulo="dinamico2" textoBoton="no enviar"> 
    soy el texto del segundo componente
    </x-card>
    <x-Alert tipo="success">verde</x-Alert>
    <x-Alert tipo="primary"> azul</x-Alert>
    <x-Alert tipo="danger"> rojo</x-Alert>
   
   
    @endsection




