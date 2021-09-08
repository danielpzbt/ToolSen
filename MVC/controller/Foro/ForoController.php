<?php

include_once '../model/Foro/ForoModel.php';
class ForoController{

    public function getInsert(){

        $obj = new ForoModel();
        $sql="SELECT * FROM t_tema";
        $ForoTemas=$obj->consult($sql);
        include_once '../view/foro/insert.php';
        
    }

    public function postInsert(){

        $obj= new ForoModel();

        $t_usuario_usu_id=1;
        $t_tema_t_cod_tema=$_POST['t_tema_t_cod_tema'];
        $titulo_f=$_POST['titulo_f'];
        $descripcion_f=$_POST['descripcion_f'];
        $fecha_ini_f=$_POST['fecha_ini_f'];
        $fecha_fin_f=$_POST['fecha_fin_f'];
        $imagen_f=$_FILES['imagen_f']['name'];
        $fecha_f=$_POST['fecha_f'];
        $estado_f=0;
        $ruta="../../GUI/web/img/$imagen_f";

        move_uploaded_file($_FILES['imagen_f']['tmp_name'],$ruta);

        $id=$obj->autoincrement("t_foro","cod_foro");
        
        $sql="INSERT INTO t_foro VALUES ($id,$t_usuario_usu_id,$t_tema_t_cod_tema,
        '$titulo_f','$descripcion_f','$fecha_ini_f','$fecha_fin_f','$ruta',
        '$fecha_f',$estado_f)";

    
        //dd($sql);
        $ejecutar=$obj->insert($sql);

        if ($ejecutar){

            redirect(getUrl("Foro","Foro","Consult"));
        }else{
            echo "<br><br><br>";
            echo "Por favor verifica que los campos no estén en blanco";

            
        }
    }

    public function consult(){

        $obj=new ForoModel();

        $sql="SELECT f.cod_foro,f.titulo_f, t.desc_tema, f.fecha_ini_f, f.fecha_fin_f,f.imagen_f, f.estado_f FROM t_foro f, t_tema t WHERE f.t_tema_t_cod_tema=t.t_cod_tema";
        $foros=$obj->consult($sql);

        include_once '../view/foro/consult.php';

    }

    public function index(){
        $obj=new ForoModel();

        $sql="SELECT f.cod_foro,f.titulo_f,f.descripcion_f, u.usu_nombres, f.t_usuario_usu_id, t.desc_tema, f.imagen_f FROM t_foro f, t_tema t, t_usuario u WHERE f.t_tema_t_cod_tema=t.t_cod_tema";
        $foros=$obj->consult($sql);

        include_once '../view/foro/index.php';

    }





    public function getUpdateModal(){

        $obj=new ForoModel();

        $id=$_POST['id'];

        $sql = "SELECT * FROM t_foro WHERE cod_foro=$id";
        $foros = $obj->consult($sql);

        $sql = "SELECT * FROM t_tema";
        $ForoTema=$obj->consult($sql);
        

        include_once '../view/Foro/modalUpdate.php';
    }

    public function postUpdate(){

        $obj=new ForoModel();
        
        $cod_foro=$_POST['cod_foro'];
        $titulo_f=$_POST['titulo_f'];
        $t_tema_t_cod_tema=$_POST['t_tema_t_cod_tema'];
        $fecha_ini_f=$_POST['fecha_ini_f'];
        $fecha_fin_f=$_POST['fecha_fin_f'];
        $descripcion_f=$_POST['descripcion_f'];
       
        if (isset($_FILES['imagen_f']['name'])) {
            $imagen_f=$_FILES['imagen_f']['name'];
            $ruta="../../GUI/web/img/$imagen_f";
            move_uploaded_file($_FILES['imagen_f']['tmp_name'],$ruta);

            if (isset($_POST['img_vieja'])) {

                $img_vieja=$_POST['img_vieja'];

            }


            $sql = "UPDATE t_foro SET titulo_f='$titulo_f',t_tema_t_cod_tema=$t_tema_t_cod_tema, fecha_ini_f='$fecha_ini_f', fecha_fin_f='$fecha_fin_f', descripcion_f='$descripcion_f', imagen_f='$ruta' WHERE cod_foro=$cod_foro";

        }else{

        $sql = "UPDATE t_foro SET titulo_f='$titulo_f',t_tema_t_cod_tema=$t_tema_t_cod_tema, fecha_ini_f='$fecha_ini_f', fecha_fin_f='$fecha_fin_f', descripcion_f='$descripcion_f' WHERE cod_foro=$cod_foro";
        }

        $ejecutar = $obj->consult($sql);

        if ($ejecutar) {
            $_SESSION['mensajeUpdate']="Se actualizó el foro <b>$titulo_f</b> correctamente";
            redirect(getUrl("Foro", "Foro", "Consult"));
        } else {
            echo "<br>";
            dd($sql);
            echo "Ops, ha ocurrido un error";
        }
    
    }

    public function getConsultModal(){

        $obj = new ForoModel();
        $id=$_POST['id'];

        $sql="SELECT f.cod_foro,f.titulo_f,f.descripcion_f,f.fecha_ini_f,f.fecha_fin_f, u.usu_nombres, f.t_usuario_usu_id, t.desc_tema, f.fecha_f, f.imagen_f FROM t_foro f, t_tema t, t_usuario u WHERE f.t_tema_t_cod_tema=t.t_cod_tema AND f.cod_foro=$id";
        $foro = $obj->consult($sql);


        include_once '../view/Foro/modalConsult.php';
    }

    public function getDeleteModal(){

        $obj = new ForoModel();

        $id=$_POST['id'];

        $sql = "SELECT f.cod_foro, f.titulo_f, t.desc_tema FROM t_foro f, t_tema t WHERE f.t_tema_t_cod_tema=t.t_cod_tema AND cod_foro=$id ";
        $foro = $obj->consult($sql);


        include_once '../view/Foro/modalDelete.php';


    }

    
    public function filtro(){

        $obj=new DepartamentoModel();

        $buscar=$_POST['buscar'];

        $sql="SELECT d.id_depto, d.nom_depto FROM departamento d WHERE d.id_depto=d.id_depto AND (d.nom_depto LIKE '%$buscar%') ORDER BY d.id_depto ASC";
    
        $departamentos=$obj->consult($sql);

        include_once '../view/departamento/filtro.php';
    }




    public function postDelete(){

        $obj=new ForoModel();
        
        $cod_foro=$_POST['cod_foro'];

        $sql = "DELETE FROM t_foro WHERE cod_foro=$cod_foro";
        $ejecutar=$obj->delete($sql);



        if ($ejecutar){

            redirect(getUrl("Foro","Foro","Consult"));
        }else{
            echo "Ops, ha ocurrido un error";
        }
    
    }

    public function postDeleteForo(){

        $obj=new ForoModel();
        
        $id=$_POST['id'];
        $estado=$_POST['estado'];


        if ($estado==1){
            $cambio=0;
        }else{
            $cambio=1;
        }


        $sql="UPDATE t_foro SET estado_f=$cambio WHERE cod_foro=$id";
        $ejecutar=$obj->update($sql);

    }




}



?>