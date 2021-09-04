<?php

    include_once '../model/Rol/RolModel.php';

    class RolController
    {
        public function getInsertModal()
        {
            $obj=new RolModel();

            include_once "../view/Rol/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new RolModel();

            $Desc_Rol=$_POST['desc_rol'];
            $imag_Rol=$_POST['imag_rol'];

            $id=$obj->autoincrement("t_rol","Cod_Rol");

            $sql="INSERT INTO t_rol VALUES($id,'$Desc_Rol', '$imag_Rol')";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Rol","Rol","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new RolModel();

            $sql="SELECT * FROM t_rol ORDER BY Cod_Rol ASC";
            $rol=$obj->consult($sql);

            include_once '../view/Rol/consult.php';
        }
        public function getUpdateModal()
        {
            $obj=new RolModel();

            $Cod_Rol=$_GET['cod_rol'];

            $sql="SELECT * FROM t_rol WHERE cod_rol = $Cod_Rol";
            $rol=$obj->consult($sql);

            include_once '../view/Rol/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new RolModel;

            $Cod_Rol=$_POST['cod_rol'];
            $Desc_Rol=$_POST['desc_rol'];
            $Imag_Rol=$_POST['imagen_f'];

            $sql="UPDATE t_rol SET desc_rol='$Desc_Rol', imag_rol='$Imag_Rol' WHERE cod_rol = $Cod_Rol";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Rol", "Rol", "consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }
        /* public function getDelete()
        {
            $obj=new RolModel();

            $Cod_Rol=$_GET['cod_rol'];

            $sql = "DELETE FROM t_rol WHERE cod_rol=$Cod_Rol";
            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("Rol","Rol","Consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        } */
    }
?>