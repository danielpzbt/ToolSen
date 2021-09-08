<?php

include_once '../model/Oferta/OfertaModel.php';
class OfertaController{

    public function getInsert(){

        $obj = new OfertaModel();
        $sql="SELECT * FROM t_oferta";
        $ForoTemas=$obj->consult($sql);
        include_once '../view/Oferta/insert.php';
        
    }

    public function postInsert(){

        $obj= new OfertaModel();

    }

    
        




}



?>