<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
  $userController = new User(false);
  if(!$userController->isLoggedIn()) {
    header("Location: /components/iniciarSesion.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="/src/css/reportUSer.css" type="text/css" />
    
    <title>Usuarios</title>
</head>
<body>
    <div class="containerPadre">
        <div class="hijo">
            <div class="buscador2">
                <ul>
                    <li onclick="location.href='/views/acercaDeN.php'"><a>Acerca de</a></li>
                    <li class="active2" onclick="location.href='/views/paginaInicial.php'"><a>Inicio</a></li> 
                    <li onclick="location.href='/views/paginaInicial.php'"><h1 class="nombreP">LOGISTIC</h1></li>
                </ul>
            </div>
            <div>
                <h1>DENUNCIA CIUDADANA</h1> 
            </div>
            <div>   
                <h2>Haz tu denuncia</h2>
            </div>
            <form action="../src/php/registrarDenuncia.php" method="post">
            <div class="ei">
                <fieldset class="form">
                    <legend>Conteste lo sieguente</legend>
                    <div>
                        <br/>
                        <label>Tipo de Reporte :</label>
                        <select name="titulo" id=""class="dos">
                            <option>Baches</option>
                            <option>Robo</option>
                            <option>Infraestructuras</option>
                            <option>Daño</option>
                        </select>
                        <br/>
                        <label for="latitud">Latitud:</label>
                        <input type="text" id="latitud" name="latitud"  readonly></input>
                        <label for="longitud">Longitud:</label>
                        <input type="text" id="longitud" name="longitud" readonly></input>
                        <br/>
                        <label>Descripción :</label>
                        <input type="text" name="descripcion" placeholder="Descripcion del Problema" class="texto" required></input>
                    </div>
                    <button class="boton" type="submit" style="height:5vh">Enviar</button>
                    <div>
                        <div id='map' style=''></div>
                        <script type='text/javascript' src='/src/js/map.js'></script>
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
</body>
</html>