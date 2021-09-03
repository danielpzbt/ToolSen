<?php

    include_once '../model/ResultadoAprendizaje/ResultadoAprendizajeModel.php';

    class ResultadoAprendizajeController
    {
        public function getInsertModal()
        {
            $obj=new ResultadoAprendizajeModel();

            $sql="SELECT * FROM t_competencia";
            $competencia=$obj->consult($sql);

            include_once "../view/ResultadoAprendizaje/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new ResultadoAprendizajeModel();

            $ReApDesc=$_POST['ReApDesc'];
            $CompCod=$_POST['CompCod'];

            $id=$obj->autoincrement("t_resultado_aprendizaje","ReApCod");

            $sql="INSERT INTO t_resultado_aprendizaje VALUES($id, '$CompCod', '$ReApDesc')";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("ResultadoAprendizaje","ResultadoAprendizaje","consult",false,"admin"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new ResultadoAprendizajeModel();

            $sql="SELECT ra.ReApCod, c.CompDesc, ra.ReApDesc FROM t_resultado_aprendizaje ra, t_competencia c WHERE ra.CompCod = c.CompCod ORDER BY ReApCod ASC";
            $resultadoApr=$obj->consult($sql);

            include_once '../view/ResultadoAprendizaje/consult.php';
        }
        public function getUpdateModal()
        {
            $obj=new ResultadoAprendizajeModel();

            $ReApCod=$_GET['ReApCod'];

            $sql="SELECT * FROM t_competencia";
            $competencia=$obj->consult($sql);

            $sql = "SELECT ra.ReApCod, c.CompCod, c.CompDesc, ra.ReApDesc FROM t_resultado_aprendizaje ra, t_competencia c WHERE ra.CompCod=c.CompCod AND ReApCod=$ReApCod";
            $resultadoApr=$obj->consult($sql);

            include_once '../view/ResultadoAprendizaje/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new ResultadoAprendizajeModel;

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