<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/api/v1/database/DataBase.php");

class Controller{
    public $code =200;
    public $db;
    function __construct($jsonResponse =true){
        if($jsonResponse) header('Content-Type: application/json');
        $this->db=new DataBase();
    }
    function response($rsp){
        http_response_code($this->code);
        echo json_encode($rsp);
    }
}

?>