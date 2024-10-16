<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/', [controladorVistas::class, 'home'])->name('inicio');
route::get('/form', [controladorVistas::class, 'formulario'])->name('formulario');
route::get('/client', [controladorVistas::class, 'consuLTA'])->name('cliente');
route::view('/comp', 'componentes')-> name('componentes');

route::post('enviarCliente',[controladorVistas::class, 'procesarCliente'])-> name('enviar');



//ruta tipo get
/*route::view('/', 'inicio') -> name('inicio');
route::view('/form', 'formulario')-> name('formulario');
route::view('/client', 'cliente') -> name('cliente');
  */
