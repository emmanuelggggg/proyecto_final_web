<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/tablas.css" type="text/css" />
    <title>Administradores</title>
</head>
<body>
    <div class="contPadre">
        <div class="buscador2">
            <ul>
                <li onclick="location.href='/views/acercaDeN.php'"><a>Acerca de</a></li>
                <li class="active2" onclick="location.href='/views/paginaInicial.php'"><a>Inicio</a></li> 
                <li onclick="location.href='/views/paginaInicial.php'"><h1 class="nombreP">LOGISTIC</h1></li>
            </ul>
        </div>
        <div class="anuncio">
            <div class="encabezado"><h1>Lista de Reportes</h1></div>
            <div id="reportes"></div>
        </div >
            <?php
                include("../templates/tablasE.php");
            ?>
        </div>
    </div>
</body>
</html>