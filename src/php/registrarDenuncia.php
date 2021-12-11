
<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
    $userController = new User(false);


    $nombre= $userController->nombre();
    $email= $userController->correo();
    $titulo= $_REQUEST["titulo"];
    $latitud= $_REQUEST["latitud"];
    $longitud= $_REQUEST["longitud"];
    $descripcion= $_REQUEST["descripcion"];

    $con=new mysqli("localhost","root","root","phpData");
    
    $query="INSERT INTO denuncias(nombre,correo,titulo,descripcion,fecha,latitud,longitud,estado) values('$nombre','$email','$titulo','$descripcion',now(),'$latitud','$longitud','Enviado')";

    $con->set_charset("utf8");
    $exec=mysqli_query($con,$query);
    if($exec){
        header("location:/views/paginaInicial.php");   
    }
?>