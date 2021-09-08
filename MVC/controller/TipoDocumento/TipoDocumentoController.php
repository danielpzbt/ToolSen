<?php

    include_once '../model/TipoDocumento/TipoDocumentoModel.php';

    class TipoDocumentoController
    {
        public function getInsertModal()
        {
            $obj=new TipoDocumentoModel();

            include_once "../view/TipoDocumento/insertModal.php";
        }
        public function postInsert()
        {
            $obj= new TipoDocumentoModel();

            $nom_tipo_doc=$_POST['nom_tipo_doc'];
            

            $sigla_tipo_doc=$_POST['sigla_tipo_doc'];

            $id=$obj->autoincrement("t_tipo_documento","cod_tipo_doc");

            $sql="INSERT INTO t_tipo_documento VALUES($id,'$nom_tipo_doc', '$sigla_tipo_doc',)";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("TipoDocumento","TipoDocumento","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }
        }
        public function consult()
        {
            $obj= new TipoDocumentoModel();

            $sql="SELECT * FROM t_tipo_documento";
            $TipoDocumento=$obj->consult($sql);

            include_once '../view/TipoDocumento/consult.php';
        }
        public function getUpdateModal()
        {
            $obj=new TipoDocumentoModel();

            $cod_tipo_doc=$_GET['cod_tipo_doc'];

            $sql="SELECT * FROM t_tipo_documento WHERE cod_tipo_doc = $Cod_tipo_doc";
            $TipoDocumento=$obj->consult($sql);

            include_once '../view/TipoDocumento/updateModal.php';
        }
        public function postUpdate()
        {
            $obj= new TipoDocumentoModel;

            $Cod_tipo_doc=$_POST['cod_tipo_doc'];
            $nom_tipo_doc=$_POST['nom_tipo_doc'];
           
            $sigla_tipo_doc=$_POST['sigla_tipo_doc'];


            $sql="UPDATE t_tipo_documento SET  nom_tipo_doc= '$nom_tipo_doc', sigla_tipo_doc='$sigla_tipo_doc' WHERE cod_tipo_doc = $Cod_tipo_doc";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                redirect(getUrl("TipoDocumento", "TipoDocumento", "consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }



       
    }
?>