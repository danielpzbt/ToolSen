<?php

    include_once '../model/Competencia/CompetenciaModel.php';

    class CompetenciaController
    {
        public function getInsertModal()
        {
            $obj=new CompetenciaModel();

            include_once "../view/Competencia/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new CompetenciaModel();

            $CompDesc=$_POST['CompDesc'];

            $id=$obj->autoincrement("t_competencia","CompCod");

            $sql="INSERT INTO t_competencia VALUES($id,'$CompDesc')";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Competencia","Competencia","consult",false,"admin"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new CompetenciaModel();

            $sql="SELECT * FROM t_competencia ORDER BY CompCod ASC";
            $competencia=$obj->consult($sql);

            include_once '../view/Competencia/consult.php';
        }
        public function getUpdateModal()
        {
            $obj=new CompetenciaModel();

            $CompCod=$_GET['CompCod'];

            $sql="SELECT * FROM t_competencia WHERE CompCod = $CompCod";
            $competencia=$obj->consult($sql);

            include_once '../view/Competencia/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new CompetenciaModel;

            $CompCod=$_POST['CompCod'];
            $CompDesc=$_POST['CompDesc'];

            $sql="UPDATE t_competencia SET CompDesc='$CompDesc' WHERE CompCod = $CompCod";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Competencia", "Competencia", "consult", false, "admin"));
            } else {
                echo "Oops, seems something went wrong";
            }
        }
    }
?>