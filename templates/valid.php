<?php
    $id=$_REQUEST["id"];

    $con=new mysqli("localhost","root","root","phpData");
    $query="UPDATE denuncias SET estado='Aceptado' where id like $id";

    $exec=mysqli_query($con,$query);

    include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
    $userController = new User(false);
    if($userController->roll()===2){
        header("Location: /views/vistaUsuario.php");
    }else{
        header("Location: /views/vistaAdmin.php");
    }
?>