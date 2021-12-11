<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/Controller.php");

class User extends Controller{
    function __construct($jsonResponse =true){
        parent::__construct($jsonResponse);
    }
    function isLoggedIn() {
        return isset($_SESSION['user']);
    }
    function roll() {
      return $_SESSION['roll'];
    }
    function nombre() {
      return $_SESSION['nombre'];
    }
    function correo() {
      return $_SESSION['correo'];
    }
    function logout(){
      $response = [];
      try {
        session_destroy();
        $response = [
          "message" => "Se ha cerrado sesión con éxito."
        ];
      } catch (Exception $e) {
        $this->code = 500;
        $response = [
          "message" => "Ha ocurrido un error inesperado, por favor intentelo nuevamente y si el problema persiste contacte a servicio al cliente.",
          "details" => $e->getMessage()
        ];
      }
      return $response;
    }
    function login() {
        $response = [];
        if($this->isLoggedIn()) {
          $this->code = 401;
          $response = [
            "message" => "Usted ya tiene una sesión activa"
          ];
        }else if (isset($_REQUEST["email"]) && isset($_REQUEST["password"])){
            $email = $_REQUEST["email"];
            $password = hash("sha256",$_REQUEST["password"]);
            $user = $this->db->get("SELECT id,nombre,correo,roll from users where correo='$email' and contraseña='$password' limit 1;");
            if(count($user)>0){
                //sesion correcta
                $this->code=200;
                $_SESSION["user"]=$user[0]->id;//se guarda el id en cookies
                $_SESSION["roll"]=$user[0]->roll;
                $_SESSION["nombre"]=$user[0]->nombre;
                $_SESSION["correo"]=$user[0]->correo;
                $response=[
                    "data"=>$user[0],
                    "roll"=>$user[0]->roll,//se obtiene el roll para mandar a usuario o administrador
                    "message" => "Ha iniciado sesion con exito",
                ];
            }else{
                //error de inicio de sesion
                $this->code=401;
                $response=[
                    "message" => "Correo electronico y/o contraseña incorrectos",
                ];
            }
        }else{
            $this->code=400;
            $response=[
                "message" => "No se solicito correctamente el servicio, faltan campos:(email,password)",
            ];
        }
        return $response;
    }
  function register() {
    $response = [];
    if (isset($_REQUEST["email"]) && isset($_REQUEST["p_apellido"]) && isset($_REQUEST["password1"]) && isset($_REQUEST["s_apellido"]) && isset($_REQUEST["nacimiento"]) && isset($_REQUEST["roll"])){
      $nombre= $_REQUEST["nombre"];
      $p_apellido= $_REQUEST["p_apellido"];
      $s_apellido= $_REQUEST["s_apellido"];
      $fecha_nacimiento= $_REQUEST["nacimiento"];
      $email= $_REQUEST["email"];
      $contraseña= $_REQUEST["password1"];
      $roll= $_REQUEST["roll"];

      $user = $this->db->post("INSERT into users (nombre,p_apellido,s_apellido,fecha_nacimiento,correo,contraseña,roll) values ('$nombre','$p_apellido','$s_apellido','$fecha_nacimiento','$email','$contraseña','$roll')");
      
      return $user;
    }
  }
}