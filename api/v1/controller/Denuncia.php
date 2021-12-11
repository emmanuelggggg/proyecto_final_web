<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/ControllerD.php");

class Denuncia extends Controller{
    function __construct($jsonResponse =true){
        parent::__construct($jsonResponse);
    }
    function ver() {
        $response = [];
        $denuncias = $this->db->get("SELECT titulo,fecha from denuncias where titulo='prueba'");
        
        if(count($denuncias)>0){
            $response=[
                'data'=>$denuncias[0],
                'titulo'=>$denuncias[0]->titulo,
                'fecha'=>$denuncias[0]->fecha,
                'descripcion'=>$denuncias[0]->descripcion,
                'foto'=>$denuncias[0]->foto,
                'ubicacion'=>$denuncias[0]->ubicacion,
                'estado'=>$denuncias[0]->estado,
                "message" => "Datos obtenidos con exito",
            ];
        }else{
            $this->code=401;
            $response=[
                "message" => "No se pueden vizualizar los datos",
            ];
        }
        return $response;
    }
}