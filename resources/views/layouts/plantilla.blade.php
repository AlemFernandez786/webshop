<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Webshop</title>
</head>
<body>
    <header class="encabezado">
        <div class="encabezado-botones">
            <span class="boton-menu"><a href="#"><i class="fas fa-chevron-circle-down"></i></a></span>
            <span class="logo">Logo</span>
            <span class="boton-carrito"><a href="#"><i class="fas fa-shopping-cart"></i></a></span>
        </div>
        <nav class="navbar">
            <ul class="menu">
                <li>
                    <a href="#"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-shopping-bag"></i> Productos</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-envelope"></i> Contacto</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
                </li>
            </ul>
        </nav>
        
    </header>

    @yield('contenido')

    <footer>

    </footer>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>