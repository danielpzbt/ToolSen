<?php

    include_once '../model/Usuario/UsuarioModel.php';

    class UsuarioController
    {
        public function getInsertModal()
        {
            $obj=new UsuarioModel();

            include_once "../view/Usuario/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new UsuarioModel();

            $Desc_Rol=$_POST['desc_rol'];
            $imag_Rol=$_POST['imag_rol'];

            $id=$obj->autoincrement("t_rol","Cod_Rol");

            $sql="INSERT INTO t_usuario VALUES($id,'$Desc_Rol', '$imag_Rol', 0)";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Usuario","Usuario","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new UsuarioModel();

            $sql="SELECT u.usu_id, u.usu_nombres, u.usu_apellidos, r.cod_rol, r.desc_rol, td.cod_tipo_doc, td.nom_tipo_doc, td.sigla_tipo_doc, u.usu_correo, u.estado_u FROM t_usuario u, t_rol r, t_tipo_documento td WHERE u.cod_rol = r.cod_rol AND u.cod_tipo_doc = td.cod_tipo_doc ORDER BY usu_id ASC";
            $usuario=$obj->consult($sql);

            include_once '../view/Usuario/consult.php';
        }
        public function getUpdateModal()
        {
            $obj=new UsuarioModel();

            $Usu_Id=$_GET['usu_id'];

            $sql="SELECT u.usu_id, u.usu_nombres, u.usu_apellidos, r.cod_rol, r.desc_rol, td.cod_tipo_doc, td.nom_tipo_doc, td.sigla_tipo_doc, u.n_documento, u.usu_correo, u.estado_u FROM t_usuario u, t_rol r, t_tipo_documento td WHERE u.cod_rol = r.cod_rol AND u.cod_tipo_doc = td.cod_tipo_doc AND u.usu_id = $Usu_Id";
            $usuario=$obj->consult($sql);

            $sql="SELECT * FROM t_rol";
            $roles=$obj->consult($sql);

            $sql="SELECT * FROM t_tipo_documento";
            $documento=$obj->consult($sql);

            include_once '../view/Usuario/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new UsuarioModel;

            $Cod_Rol=$_POST['cod_rol'];
            $Desc_Rol=$_POST['desc_rol'];
            $Imag_Rol=$_POST['imagen_f'];

            $sql="UPDATE t_usuario SET desc_rol = '$Desc_Rol', imag_rol = '$Imag_Rol', estado_r = 0 WHERE cod_rol = $Cod_Rol";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("Rol", "Rol", "consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }
        /* public function getDelete()
        {
            $obj=new UsuarioModel();

            $Cod_Rol=$_GET['cod_rol'];

            $sql = "DELETE FROM t_usuario WHERE cod_rol=$Cod_Rol";
            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("Usuario","Usuario","Consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        } */
        public function changeVisibility()
        {
            $obj=new UsuarioModel();

            $Usu_Id=$_POST['id'];
            $Estado_u=$_POST['estado'];

            if ($Estado_u==1){
                $cambio=0;
            }else{
                $cambio=1;
            }

            $sql="UPDATE t_usuario SET estado_u = $cambio WHERE cod_rol = $Usu_Id";
            $ejecutar=$obj->update($sql);
        }
    }
?>