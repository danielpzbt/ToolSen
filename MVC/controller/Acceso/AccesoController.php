<?php
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{
        public function login(){

            $usuario=$_POST['usuario'];
            $pass=$_POST['clave'];

            $obj=new AccesoModel();
            //
            $sql="SELECT usu_id, usu_nombre, usu_apellido FROM usuario WHERE usu_clave='$pass' AND (usu_correo='$usuario' OR usu_nickname='$usuario')";

            $user=$obj->consult($sql);

            if(mysqli_num_rows($user)>0) {
                foreach ($user as $us) {
                    $_SESSION['id']=$us['usu_id'];
                    $_SESSION['nombre']=$us['usu_nombre'];
                    $_SESSION['apellido']=$us['usu_apellido'];
                    $_SESSION['auth']="ok";
                }
                redirect("index.php");
            }else{
                $_SESSION['mensaje']="El Correo/Nickname y/o la contraseña son incorrectos";
                redirect("login.php");
            }

        }

        public function logout(){

            session_destroy();
            redirect("login.php");
        }
    }
?>