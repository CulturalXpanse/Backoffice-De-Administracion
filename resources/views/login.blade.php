<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Kevin Pereira, Xanders Ibarra, Martin Martinez, Juan Curbelo">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title data-trad="titulo">CulteX | Inicio de Sesión</title>
        <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
        <link rel="stylesheet" href="{{ asset('css/idiomaModal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
        <link rel="icon" href="{{ asset('img/IconoPaginaCulteX.png') }}" type="image/icon type">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    </head>
<body>
    <div class="container">
        <div class="center-section">
            <div class="logo">
                <img src="{{ asset('img/LogoCulteXLetrasNegrasChica.png') }}" alt="Logo"> 
            </div>
            <div class="login-form">
                <h1 data-trad="administracion">Administración</h1>
                <label for="email" data-trad="correo">Correo electrónico</label>
                <input type="email" id="username" name="email" required>
                <label for="password" data-trad="contrasena">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <span id="mensaje-error" class="mensaje-error" style="display: none;"></span>
                <div id="mensaje"></div>
                <button type="submit" id="btnLogin" data-trad="iniciarSesion">Iniciar sesión</button>
            </div> 
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <a href="#" class="button" id="openModal" data-trad="cambiarIdioma">Cambiar idioma</a>
            <div class="footer-legal">
                <span>&copy; 2024 CulteX,</span> <img src="{{ asset('img/LogoCulturalXpanseSinFondoBlanco.png') }}" alt="Logo Empresa">  <span data-trad="derechos">Todos los derechos reservados.</span>
                <a href="{{ url('/centroDeAyuda') }}" data-trad="centroAyuda">Centro de ayuda</a>
            </div>
        </div>
    </footer>
    <div id="languageModal" class="modalIdioma">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 data-trad="seleccionIdioma">Selecciona el idioma</h2>
            <button class="language-option" data-idioma="es">Español</button>
            <button class="language-option" data-idioma="en">English</button>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}" defer></script>
    <script src="{{ asset('js/idioma.js') }}" defer></script>
    <script src="{{ asset('js/idiomaAlmacenamiento.js') }}" defer></script>
</body>
</html>