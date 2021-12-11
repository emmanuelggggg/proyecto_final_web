<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
  $userController = new User(false);
  if($userController->isLoggedIn()) {
      if($userController->roll()===2){
        header("Location: /views/vistaUsuario.php");
    }else{
        header("Location: /views/vistaAdmin.php");
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/forms.css" type="text/css"/>
    <title>Registrar Usuario</title>
</head>
<body>
    <form action="../src/php/registrar.php" method="post" id="form">
        <div class="form">
            <div class="encabezado">
                <h1>Registro</h1>
            </div>
            <div class="campos">
                <div class="datos">
                    <input class="entradas" type="text" name="nombre" id="nombre" required>
                    <label for="">Nombre</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="text" name="p_apellido" id="p_apellido" required>
                    <label for="">Primer Apellido</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="text" name="s_apellido" id="s_apellido" required>
                    <label for="">Segundo Apellido</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="date" name="nacimiento" id="nacimiento" required>
                    <label for="">Fecha de Nacimiento</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="email" name="email" id="email" required>
                    <label for="">Correo</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="password" name="password1" id="password1" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="password" name="password2" id="password2" required>
                    <label for="">Confirmar Contraseña</label>
                </div>
                <div class="datos">
                    <span class="rol">Roll : </span>
                    <select name="roll" required>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                <button type="submit">Registrar</button>
                <button type="button" onclick="location.href='../index.php'">Cancelar</button>
                <p id="alerta" class="alerta"></p>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>