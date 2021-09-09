<?php
    include_once '../model/Noticia/NoticiaModel.php';

    class NoticiaController{
        public function consult(){
            $obj = new NoticiaModel();

            $sql="SELECT * FROM noticia";
            $noticias = $obj -> consult($sql);

            include_once '../view/partials/new.php';

        }
    }



?>
