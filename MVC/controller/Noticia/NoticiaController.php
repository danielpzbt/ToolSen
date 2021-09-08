<?php

    include_once '../model/Noticia/NoticiaModel.php';

    class NoticiaController
    {
        public function getInsertModal()
        {
            $obj=new NoticiaModel();

            $Usu_Id = 1;

            $sql="SELECT * FROM t_usuario WHERE usu_id = $Usu_Id";
            $usuario=$obj->consult($sql);

            $sql="SELECT * FROM t_tipo_noticia";
            $tiponoti=$obj->consult($sql);

            include_once "../view/Noticia/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new NoticiaModel();

            $Usu_Id=$_POST['usu_id'];
            $Cod_Tipo_Not=$_POST['cod_tipo_not'];
            $Tit_Noti=$_POST['tit_noti'];
            $Desc_Noti=$_POST['desc_noti'];
            $Fech_Noti=$_POST['fech_noti'];
            $Imag_Noti=$_POST['imag_noti'];

            $id=$obj->autoincrement("t_noticia","cod_noti");

            $sql="INSERT INTO t_noticia VALUES($id, $Usu_Id, $Cod_Tipo_Not, 0, '$Desc_Noti', '$Tit_Noti', '$Fech_Noti', '$Imag_Noti')";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Noticia","Noticia","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new NoticiaModel();

            $sql="SELECT n.cod_noti, u.usu_id, u.usu_nombres, u.usu_apellidos, tn.desc_tipo_not, n.tit_noti, n.desc_noti, n.fech_noti, n.imag_noti, n.id_estado FROM t_noticia n, t_usuario u, t_tipo_noticia tn WHERE n.usu_id = u.usu_id AND n.cod_tipo_not = tn.cod_tipo_not ORDER BY cod_noti ASC";
            $noticia=$obj->consult($sql);

            include_once '../view/Noticia/consult.php';
        }
        public function consultModal()
        {
            $obj = new NoticiaModel();

            $Cod_Noti=$_GET['cod_noti'];

            $sql="SELECT desc_noti FROM t_noticia n WHERE cod_noti = $Cod_Noti";
            $noticia=$obj->consult($sql);

            include_once '../view/Noticia/consultModal.php';
        }
        public function getUpdateModal()
        {
            $obj=new NoticiaModel();

            $Cod_Noti=$_GET['cod_noti'];

            $sql="SELECT * FROM t_tipo_noticia";
            $tiponoti=$obj->consult($sql);

            $sql="SELECT n.cod_noti, tn.cod_tipo_not, tn.desc_tipo_not, n.tit_noti, n.desc_noti, n.fech_noti, n.imag_noti, n.id_estado FROM t_noticia n, t_tipo_noticia tn WHERE n.cod_tipo_not = tn.cod_tipo_not AND cod_noti = $Cod_Noti";
            $noticia=$obj->consult($sql);

            include_once '../view/Noticia/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new NoticiaModel;

            $Cod_Noti=$_POST['cod_noti'];
            $Cod_Tipo_Not=$_POST['cod_tipo_not'];
            $Tit_Noti=$_POST['tit_noti'];
            $Desc_Noti=$_POST['desc_noti'];
            $Imag_Noti=$_POST['imagen_f'];

            $sql="UPDATE t_noticia SET cod_tipo_not = '$Cod_Tipo_Not', tit_noti = '$Tit_Noti', desc_noti = '$Desc_Noti', imag_noti = '$Imag_Noti' WHERE cod_noti = $Cod_Noti";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Noticia", "Noticia", "consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }
        /* public function getDelete()
        {
            $obj=new NoticiaModel();

            $Cod_Noti=$_GET['cod_noti'];

            $sql = "DELETE FROM t_noticia WHERE cod_noti = $Cod_Noti";
            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("Noticia","Noticia","Consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        } */
        public function changeVisibility()
        {
            $obj=new NoticiaModel();

            $Cod_Noti=$_POST['id'];
            $Id_Estado=$_POST['estado'];

            if ($Id_Estado == 1){
                $cambio = 0;
            }else{
                $cambio = 1;
            }

            $sql="UPDATE t_noticia SET id_estado = $cambio WHERE cod_noti = $Cod_Noti";
            $ejecutar=$obj->update($sql);
        }
    }
?>