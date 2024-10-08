<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('titulo')</title>
    @vite(['resources/js/app.js'])
    
<body>
    {{-- Inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('formulario') }}">Registro Clientes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente') }}">Consulta Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    @yield('contenido')

</body>
</html>
