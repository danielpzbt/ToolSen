<?php
    include_once '../model/NivelDeFormacionDelPrograma/NivelDeFormacionDelProgramaModel.php';
    class NivelDeFormacionDelProgramaController
    {
        public function consult(){
            $obj= new NivelDeFormacionDelProgramaModel(); 
    
            $sql="SELECT * FROM t_programa_nivel ORDER BY id_prog_niv ASC";
            $nivelformacion=$obj->consult($sql);
            
            include_once '../view/niveldeformaciondelprograma/consult.php';
        }

        public function postInsert(){
            $obj= new NivelDeFormacionDelProgramaModel();
            
            $nombre_prog=$_POST['nombre_prog'];

            $id=$obj->autoincrement("t_programa_nivel","id_prog_niv");

            $sql="INSERT INTO t_programa_nivel VALUES($id,'$nombre_prog')";
            
            // probando commit  
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
               
                redirect(getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            } 

        }

        //------------------------------------------

        public function getInsertModal(){
            
            $obj=new NivelDeFormacionDelProgramaModel();
            
            include_once '../view/nivelDeFormacionDelPrograma/insert.php';
        }

        
        
        public function postUpdate(){
            $obj= new NivelDeFormacionDelProgramaModel();

            $id_prog_niv=$_POST['id_prog_niv'];
            $nombre_prog=$_POST['nombre_prog'];
            
            
            $sql="UPDATE t_programa_nivel SET id_prog_niv=$id_prog_niv, nombre_prog='$nombre_prog'
            WHERE id_prog_niv=$id_prog_niv";

            $ejecutar=$obj->consult($sql);  

            if ($ejecutar) {
                
                redirect(getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","consult"));
            }else{
                echo "Ops, ha ocurrido un error inesperado";
            }
        
        }

        public function getUpdateModal(){
            $obj= new NivelDeFormacionDelProgramaModel();
        
            $id=$_POST['id'];

            $sql="SELECT * FROM t_programa_nivel WHERE id_prog_niv=$id";

            $nivelformacion=$obj->consult($sql);

            include_once '../view/nivelDeFormacionDelPrograma/updateModal.php';
        }
        
        

        
        public function postDelete(){
            $obj= new NivelDeFormacionDelProgramaModel();

            $id_prog_niv=$_POST['id_prog_niv'];
            $nombre_prog=$_POST['nombre_prog'];

            $sql="DELETE FROM t_programa_nivel WHERE id_prog_niv=$id_prog_niv";
            $ejecutar=$obj->consult($sql);

            if ($ejecutar) {
                redirect(getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }

        }

        public function getDeleteModal(){
            $obj= new NivelDeFormacionDelProgramaModel();

            $id=$_POST['id'];
            
            $sql="SELECT * FROM t_programa_nivel WHERE id_prog_niv=$id ";

            $nivelformacion=$obj->consult($sql);

            include_once '../view/nivelDeFormacionDelPrograma/deleteModal.php';
        }

        //------------------------------------------

    }
?>