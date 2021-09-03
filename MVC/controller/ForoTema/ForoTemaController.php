<?php

include_once '../model/ForoTema/ForoTemaModel.php';
class ForoTemaController{

    public function getInsert(){
        include_once '../view/ForoTema/insert.php';
        
    }

    public function postInsert(){

        $obj= new ForoTemaModel();

        $desc_tema=$_POST['desc_tema'];
        $fecha_t=$_POST['fecha_t'];
        $id=$obj->autoincrement("t_tema","t_cod_tema");
        
        $sql="INSERT INTO t_tema VALUES ($id,'$desc_tema','$fecha_t')";

    

        $ejecutar=$obj->insert($sql);

        if ($ejecutar){

            redirect(getUrl("ForoTema","ForoTema","Consult"));
        }else{

            echo "Ops, ha ocurrido un error";
            dd($sql);

            
        }
    }

    public function consult(){

        $obj=new ForoTemaModel();

        $sql="SELECT * FROM t_tema ";
        $ForoTema=$obj->consult($sql);

        include_once '../view/ForoTema/consult.php';
    }

    public function getInsertModal(){

        $obj=new ForoTemaModel();
        $sql= "SELECT * FROM t_tema";
        $ForoTema=$obj->consult($sql);
        include_once '../view/ForoTema/modalInsert.php';

    }

    


    public function getUpdateModal(){
        $obj=new ForoTemaModel();

        $id=$_POST['id'];
        
        $sql = "SELECT * FROM t_tema WHERE t_cod_tema=$id";
        $ForoTema = $obj->consult($sql);
        

        include_once '../view/ForoTema/modalUpdate.php';
    }

    public function postUpdate(){

        $obj=new ForoTemaModel();
        
        $t_cod_tema=$_POST['t_cod_tema'];
        $desc_tema=$_POST['desc_tema'];

        $sql = "UPDATE t_tema  SET desc_tema='$desc_tema' WHERE t_cod_tema=$t_cod_tema";
        $ejecutar=$obj->update($sql);


        if ($ejecutar){

            redirect(getUrl("ForoTema","ForoTema","Consult"));
        }else{
            echo "Ops, ha ocurrido un error";
        }
    
    }

    public function getDeleteModal(){

        $obj = new ForoTemaModel();

        $id=$_POST['id'];

        $sql = "SELECT t.t_cod_tema, t.desc_tema FROM t_tema t WHERE t.t_cod_tema=$id";
        $ForoTema = $obj->consult($sql);


        include_once '../view/ForoTema/modalDelete.php';

    }

    public function postDelete(){

        $obj=new ForoTemaModel();
        
        $t_cod_tema=$_POST['t_cod_tema'];

        $sql = "DELETE FROM t_tema WHERE t_cod_tema=$t_cod_tema";
        
        $ejecutar=$obj->delete($sql);

        if ($ejecutar){

            redirect(getUrl("ForoTema","ForoTema","Consult"));
        }else{


            echo "<br>";
            echo "No puede eliminar este Tema, es foráneo en un Foro";
        }
    
    }

    public function getConsultModal(){

        $obj = new ForoTemaModel();
        $id=$_POST['id'];
    
        $test= new DateTime('');
        echo date_format($test, '');

        $sql = "SELECT * FROM t_tema WHERE t_cod_tema=$id";
        $ForoTema = $obj->consult($sql);


        include_once '../view/ForoTema/modalConsult.php';

    }

    


    public function filtro(){

        $obj=new ForoTemaModel();

        $buscar=$_POST['buscar'];

        $sql="SELECT d.id_depto, d.nom_depto FROM departamento d WHERE d.id_depto=d.id_depto AND (d.nom_depto LIKE '%$buscar%') ORDER BY d.id_depto ASC";
    
        $departamentos=$obj->consult($sql);

        include_once '../view/departamento/filtro.php';
    }






}



?>