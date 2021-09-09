<?php
    include_once '../model/Pqrsf/PqrsfModel.php';

    class PqrsfController {

        public function consult(){
            $obj = new PqrsfModel();

            $sql="SELECT p.cod_pqrsf, t.pqrsf_tipo_desc, p.usu_id, e.desc_estado, p.pqrsf_nombres, p.pqrsf_apellidos, p.pqrsf_correo, p.pqrsf_fech, p.pqrsf_observacion FROM t_pqrsf AS p, t_pqrsf_tipo AS t, t_estado AS e WHERE t.pqrsf_tipo_cod = p.pqrsf_tipo_cod AND e.id_estado = p.id_estado";
            $pqrsfconsult=$obj->consult($sql);

            include_once '../view/Pqrsf/consult.php';

        }
        public function getDetail(){
            $obj = new PqrsfModel();

            $cod_pqrsf =$_POST['id'];

            $sql="SELECT pqrsf_observacion FROM t_pqrsf WHERE cod_pqrsf=$cod_pqrsf";
            $pqrsfdetail=$obj->consult($sql);

            include_once '../view/Pqrsf/detailModal.php';
        }


    }


?>