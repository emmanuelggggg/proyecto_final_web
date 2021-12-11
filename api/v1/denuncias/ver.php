<?php
    include_once ($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/Denuncia.php");  
    $denuncias = new Denuncia(false);
    $response = $denuncias->ver();
    $denuncias->response($response);