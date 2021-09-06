<?php

    include_once '../model/Pqrsf/PqrsfModel.php';

    class PqrsfController{

        public function postInsert(){
            $obj = new PqrsfModel();

            $pqrsf_tipo_cod=$_POST['pqrsf_tipo_cod'];
            $pqrsf_nombres=$_POST['pqrsf_nombres'];
            $pqrsf_apellidos=$_POST['pqrsf_apellidos'];
            $pqrsf_correo=$_POST['pqrsf_correo'];
            $pqrsf_observacion=$_POST['pqrsf_observacion'];
            $id=$obj->autoincrement("t_pqrsf","cod_pqrsf");

            $sql="INSERT INTO t_pqrsf VALUES($id,$pqrsf_tipo_cod,NULL,NULL,'$pqrsf_nombres','$pqrsf_apellidos','$pqrsf_correo',NOW(),'$pqrsf_observacion')";
            $ejecutar=$obj->insert($sql);

            if ($ejecutar) {
                redirect("index.php");
            }else{
                echo "Ups, ha ocurrido un error"; 
                
            }

        }
        
    }
?>