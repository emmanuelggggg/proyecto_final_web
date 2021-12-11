<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/estilos.css" type="text/css" />
    <title>Inicio</title>
</head>
    <body>
        <div class="contPadre">
    <!-- Barra buscadora -->
            <div class="buscador">
                <ul>
                    <li><a>Blog</a></li>
                    <li onclick="location.href='/views/acercaDeN.php'"><a>Acerca de</a></li>
                    <li class="active" onclick="location.href='/views/paginaInicial.php'"><a>Inicio</a></li> 
                    <li onclick="location.href='/views/paginaInicial.php'"><h1 class="nombreP">Logistic</h1></li>
                </ul>
            </div>

            <!-- para mostrar el anuncio -->
            <div class="anuncio">
                <div class="encabezado1">
                    <h1>Bienvenido a logistic</h1>
                </div>
                <div class="mensaje">
                    <p>Para continuar es nesesario que ejecute alguna de las siguientes acciones:</p>
                    <button type="button" onclick="location.href='/components/registrar.php'">Registrar</button>
                    <button type="button" onclick="location.href='/components/iniciarSesion.php'">Iniciar Sesión</button>
                    <button type="button" onclick="location.href='/views/paginaInicial.php'">Continuar sin autenticarse</button>
                </div>  
            </div>
        </div>
    </body>
</html>