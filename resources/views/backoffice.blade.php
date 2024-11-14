<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kevin Pereira, Xanders Ibarra, Martin Martinez, Juan Curbelo">
    <title data-trad="titulo">CulteX | Backoffice</title>
    <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="icon" href="{{ asset('img/IconoPaginaCulteX.png') }}" type="image/icon type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b2b9fd891f.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav>
            <div class="nav-left">
                <a href="../HTML/inicio.html"><img src="../Img/LetrasCulteXSinFondo.png" class="logo" alt="Logo"></a>
            </div>
            <div class="nav-right">
                <!---------Imagen de Perfil--------->
                <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                    <img class="fotoPerfil" alt="Foto de Perfil"/>
                </div>
            </div>
            <!---------Menu Principal--------->
            <div class="settings-menu">
                <!---------Modo Oscuro--------->
                <div id="dark-btn" class="dark-btn-on">
                    <span></span>
                </div>
                <div class="settings-menu-inner">
                    <div class="user-perfil">
                        <div class="profile-pic-container">
                            <img class="fotoPerfil" alt="Foto de Perfil"/>
                        </div>
                        <div>
                            <p class="nombre-usuario">Cargando...</p>
                            <a href="../HTML/perfil.html" data-trad="perfil">Perfil</a>
                        </div>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <a id="openModal" class="idiomaBoton"><i class="fa-solid fa-earth-americas"></i><p data-trad="idioma">Idioma</p><img src="../Img/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <a href="../HTML/centroDeAyuda.html"><i class="fa-solid fa-circle-question fa-2x1"></i><p data-trad="centroAyuda">Centro de ayuda</p><img src="../Img/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <a id="logout-button" style="cursor: pointer;"><i class="fa-solid fa-arrow-right-from-bracket fa-2x1"></i><p data-trad="cerrarSesion">Cerrar sesión</p><img src="../Img/arrow.png" width="10px"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="mainContent">

    </div>
    <script src="{{ asset('js/usuarioActual.js') }}" defer></script>
    <script src="{{ asset('js/dropdownMenu.js') }}" defer></script>
    <script src="{{ asset('js/idioma.js') }}" defer></script>
    <script src="{{ asset('js/idiomaAlmacenamiento.js') }}" defer></script>
    <script src="{{ asset('js/cerrarSesion.js') }}" defer></script>
</body>
</html>