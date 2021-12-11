<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
    $userController = new User(false);
    if($userController->isLoggedIn()) {
        header("Location: /views/paginaInicialSecion.php");
    }

    include_once ("../templates/head.php");
    include_once ("../templates/header.php");
    include_once ("../templates/footer.php");
?>