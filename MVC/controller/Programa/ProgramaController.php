<?php 

    include_once '../model/Programa/ProgramaModel.php';
    class ProgramaController{
        public function getInsert(){

            $obj = new ProgramaModel();
            $sql="SELECT * FROM t_programa_area";
            $sql="SELECT * FROM t_programa_nivel";
            $ProgramaArea=$obj->consult($sql);
            $ProgramaNivel=$obj->consult($sql);
            include_once '../view/Programa/insert.php';
            
        }

        public function postInsert(){

            $obj= new ProgramaModel();

            $t_programa_area_prog_area_cod=$_POST['t_programa_area_prog_area_cod'];
            $t_programa_nivel_id_prog_niv=$_POST['t_programa_nivel_id_prog_niv'];
            $nombre_p=$_POST['nombre_p'];
            $sigla_p=$_POST['sigla_p'];
            $observacion_p=$_POST['observacion_p'];
            $titulo_p=$_POST['titulo_p'];
            $duracion_p=$_POST['duracion_p'];
            $codigo_p=$_POST['codigo_p'];
            $imagen_p=$_FILES['imagen_p']['name'];
            $ruta="../../GUI/web/img/$imagen_o";

            move_uploaded_file($_FILES['imagen_o']['tmp_name'],$ruta);

            $id=$obj->autoincrement("t_programas","id_programa");
            $sql="INSERT INTO t_programas VALUES ($id,$t_programa_area_prog_area_cod,$t_programa_nivel_id_prog_niv,'$nombre_p','$sigla_p','$observacion_p','$codigo_p','$ruta)";

            //DD
            $ejecutar=$obj->insert($sql);

            if ($ejecutar){

                redirect(getUrl("Programa","Programa","Consult"));
            }else{
                
                echo "Verifica los campos";
            }


        }

        public function consult(){

            $obj=new ProgramaModel();
    
            $sql="SELECT f.id_programa, f.t_programa_area_prog_area_cod, f.t_programa_nivel_id_prog_niv, f.nombre_p, f.observacion_p, f.codigo_p, f.imagen_p, FROM t_programa f";
            $programa=$obj->consult($sql);
    
            include_once '../view/Programa/consult.php';
    
        }
    }




?>