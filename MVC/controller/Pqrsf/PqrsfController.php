<?php
    include_once '../model/Pqrsf/PqrsfModel.php';

    class PqrsfController {

        public function consult(){
            $obj = new PqrsfModel();

            $sql="SELECT * FROM t_pqrsf";
            $pqrsfconsult=$obj->consult($sql);

            include_once '../view/Pqrsf/consult.php';

        }


    }


?>