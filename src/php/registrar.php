
<?php
    $nombre= $_REQUEST["nombre"];
    $p_apellido= $_REQUEST["p_apellido"];
    $s_apellido= $_REQUEST["s_apellido"];
    $fecha_nacimiento= $_REQUEST["nacimiento"];
    $email= $_REQUEST["email"];
    $contraseña= $_REQUEST["password1"];
    $roll= $_REQUEST["roll"];

    $con=new mysqli("localhost","root","root","phpData");
    
    $query="CALL registrar('$nombre','$p_apellido','$s_apellido','$fecha_nacimiento','$email','$contraseña','$roll')";

    $con->set_charset("utf8");
    $exec=mysqli_query($con,$query);
    if($exec){
        if($roll==1){
            header("location:/views/vistaAdmin.php");   
        }else{
            header("location:/views/vistaUsuario.php");   
        }
    }
?>