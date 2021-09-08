<?php

    include_once '../model/Oferta/OfertaModel.php';
    class OfertaController{

        public function getInsert(){

            $obj = new OfertaModel();
            $sql="SELECT * FROM t_oferta_detalle";
            $OfertaDetalle=$obj->consult($sql);
            include_once '../view/Oferta/insert.php';
            
        }

        public function postInsert(){

            $obj= new OfertaModel();

            $t_usuario_usu_id=1;
            $t_estado_id_estado=$_POST['t_estado_id_estado'];
            $descripcion_o=$_POST['descripcion_o'];
            $fecha_ini_o=$_POST['fecha_ini_o'];
            $fecha_fin_o=$_POST['fecha_fin_o'];
            $imagen_o=$_FILES['imagen_o']['name'];
            $ruta="../../GUI/web/img/$imagen_o";

            move_uploaded_file($_FILES['imagen_o']['tmp_name'],$ruta);

            $id=$obj->autoincrement("t_oferta","id_oferta");
            $sql="INSERT INTO t_oferta VALUES ($id,$t_usuario_usu_id,$t_estado_id_estado,'$descripcion_o','$fecha_ini_o','$imagen_o','$ruta')";

            //DD
            $ejecutar=$obj->insert($sql);

            if ($ejecutar){

                redirect(getUrl("Oferta","Oferta","Consult"));
            }else{
                
                echo "Verifica los campos";
            }


        }

        
        public function consult(){

            $obj=new OfertaModel();

            $sql="SELECT f.id_oferta, t.T_programa_id_programa, f.descripcion_o, f.fecha_ini_o, f.fecha_fin_o,f.imagen_o, FROM t_oferta f, t_oferta_detalle t WHERE t.cupos_od=f.t_estado_id_estado";
            $Oferta=$obj->consult($sql);

            include_once '../view/oferta/consult.php';

        }


        
        



        public function getUpdateModal(){

            $obj=new OfertaModel();

            $id=$_POST['id'];

            $sql = "SELECT * FROM t_oferta WHERE id_oferta=$id";
            $Oferta = $obj->consult($sql);

            $sql = "SELECT * FROM t_oferta_detalle";
            $OfertaDetalle=$obj->consult($sql);
            

            include_once '../view/Oferta/modalUpdate.php';
        }

        public function postUpdate(){

            $obj=new OfertaModel();
            
            $id_oferta=$_POST['id_oferta'];
            $t_usuario_usu_id=1;
            $t_estado_id_estado=$_POST['t_estado_id_estado'];
            $descripcion_o=$_POST['descripcion_o'];
            $fecha_ini_o=$_POST['fecha_ini_o'];
            $fecha_fin_o=$_POST['fecha_fin_o'];
        
            if (isset($_FILES['imagen_o']['name'])) {
                $imagen_f=$_FILES['imagen_o']['name'];
                $ruta="../../GUI/web/img/$imagen_o";
                move_uploaded_file($_FILES['imagen_o']['tmp_name'],$ruta);

                if (isset($_POST['img_vieja'])) {

                    $img_vieja=$_POST['img_vieja'];

                }


                $sql = "UPDATE t_oferta SET = t_usuario_usu_id'$t_usuario_usu_id',t_estado_id_estado=$t_estado_id_estado, fecha_ini_o='$fecha_ini_o', fecha_fin_o='$fecha_fin_o', descripcion_o='$descripcion_o', imagen_o='$ruta' WHERE id_oferta=$id_oferta";

            }else{

            $sql = "UPDATE t_oferta SET t_usuario_usu_id='$t_usuario_usu_id,t_estado_id_estado=$t_estado_id_estado, fecha_ini_o='$fecha_ini_o', fecha_fin_o='$fecha_fin_o', descripcion_o='$descripcion_o' WHERE id_oferta=$oferta";
            }

            $ejecutar = $obj->consult($sql);

            if ($ejecutar) {
                $_SESSION['mensajeUpdate']="Se actualizo la oferta <b>$t_estado_id_estado</b> correctamente";
                redirect(getUrl("Oferta","Oferta","Consult"));
            } else {
                echo "<br>";
                dd($sql);
                echo "Ocurrio un error";
            }
        
        }

        public function getDeleteModal(){

            $obj = new OfertaModel();

            $id=$_POST['id'];

            $sql = "SELECT f.id_oferta, f.t_usuario_usu_id, t.T_programa_id_programa FROM t_oferta f, t_oferta_detalle t WHERE f.t_estado_id_estado=t.cupos_od AND id_oferta=$id ";
            $Oferta = $obj->consult($sql);


            include_once '../view/Oferta/modalDelete.php';


        }

        public function postDelete(){

            $obj=new OfertaModel();
            
            $id_oferta=$_POST['id_oferta'];

            $sql = "DELETE FROM t_oferta WHERE id_oferta=$id_oferta";
            $ejecutar=$obj->delete($sql);



            if ($ejecutar){

                redirect(getUrl("Oferta","Oferta","Consult"));
            }else{
                echo "Ocurrio un error";
            }
       }   

    }

?>