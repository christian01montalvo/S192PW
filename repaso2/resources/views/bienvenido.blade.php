<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
    @vite(['resources/js/app.js'])
    
    <style>
        body, html {
            height: 100%;
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
    <h1 class="display-1">¡Bienvenido a la Biblioteca!</h1>    
    <p>Explora un mundo de conocimiento y aventuras literarias.</p>
    <a href="{{ route('registro') }}" class="btn btn-primary">Entrar</a>
    {{-- <a href="/registro" class="btn btn-danger"> entrar </a> --}}
    <a href="catalogo.html" class="btn-entrar">Entrar</a>
  </div>
</body>
</html>


