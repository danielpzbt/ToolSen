<?php
    include_once '../model/LineaTecnologica/LineaTecnologicaModel.php';
    class LineaTecnologicaController
    {
        public function consult(){
            $obj= new LineaTecnologicaModel(); 
    
            $sql="SELECT * FROM t_linea_tecnologica ORDER BY lin_tec_cod ASC ";
            $lineatecnologica=$obj->consult($sql);
            
            include_once '../view/lineatecnologica/consult.php';
        }

        public function getInsertModala(){
            
            $obj=new LineaTecnologicaModel();
            
            include_once '../view/lineatecnologica/insert.php';
        }

        public function postInsert(){
            $obj= new LineaTecnologicaModel();

            
            $lin_tec_desc=$_POST['lin_tec_desc'];
            $lin_tec_desc=trim($lin_tec_desc);
            $id=$obj->autoincrement("t_linea_tecnologica","lin_tec_cod");
            $sql="INSERT INTO t_linea_tecnologica VALUES($id,'$lin_tec_desc')";
            //-----------------------------
            
            $conexion=$obj->getConnect();
            $consult="SELECT lin_tec_desc FROM t_linea_tecnologica WHERE lin_tec_desc='$lin_tec_desc' ";
            $verificar= mysqli_query($conexion,$consult);

            if(mysqli_num_rows($verificar) > 0 ){
                echo '
                    <script>
                        alert("La Línea tecnológica que intentas registrar, ya existe. ");
                    </script>
                ';
                redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
                exit();
                
            }

            //-----------------------------
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
               
                redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            } 

        }
        public function getInsertModal(){
            
            $obj=new LineaTecnologicaModel();
            
            include_once '../view/lineatecnologica/insertModal.php';
        }

        
        
        public function postUpdate(){
            $obj= new LineaTecnologicaModel();

            $lin_tec_cod=$_POST['lin_tec_cod'];
            $lin_tec_desc=$_POST['lin_tec_desc'];
            
            $lin_tec_desc=trim($lin_tec_desc);
            
            $sql="UPDATE t_linea_tecnologica SET lin_tec_cod=$lin_tec_cod, lin_tec_desc='$lin_tec_desc'
            WHERE lin_tec_cod=$lin_tec_cod";

            //-----------------------------

            $conexion=$obj->getConnect();
            $consult="SELECT lin_tec_desc FROM t_linea_tecnologica WHERE lin_tec_desc='$lin_tec_desc' ";
            $verificar= mysqli_query($conexion,$consult);

            if(mysqli_num_rows($verificar) > 0 ){
                echo '
                    <script>
                        alert("No puedes darle ese nombre a la Línea tecnológica, ya existe. ");
                    </script>
                ';
                redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
                exit();
                
            }

            //-----------------------------

            $ejecutar=$obj->consult($sql);  

            if ($ejecutar) {
                
                redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
            }else{
                echo "Ops, ha ocurrido un error inesperado";
            }
        
        }

        public function getUpdateModal(){
            $obj= new LineaTecnologicaModel();
        
            $id=$_POST['id'];

            $sql="SELECT * FROM t_linea_tecnologica WHERE lin_tec_cod=$id";

            $lineatecnologicas=$obj->consult($sql);

            include_once '../view/lineatecnologica/updateModal.php';
        }
        
        

        
        public function postDelete(){
            $obj= new LineaTecnologicaModel();

            $lin_tec_cod=$_POST['lin_tec_cod'];
            $lin_tec_desc=$_POST['lin_tec_desc'];

            $sql="DELETE FROM t_linea_tecnologica WHERE lin_tec_cod=$lin_tec_cod";
            $ejecutar=$obj->consult($sql);

            if ($ejecutar) {
                redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
            }

        }

        public function getDeleteModal(){
            $obj= new LineaTecnologicaModel();

            $id=$_POST['id'];
            
            $sql="SELECT * FROM t_linea_tecnologica WHERE lin_tec_cod=$id ";

            $lineatecnologicas=$obj->consult($sql);

            include_once '../view/lineatecnologica/deleteModal.php';
        }
        
        


    }
?>