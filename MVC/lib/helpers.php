
<?php
session_start();

function redirect($url)
{

    echo "<script type='text/javascript'>"

        . "window.location.href='$url'"
        . "</script>";
}

function dd($var)
{

    echo "<pre>";
    die(print_r($var));
}

function getUrl($modulo, $controlador, $funcion, $parametros = false, $pagina = false)
{

    if ($pagina == false) {

        $pagina = "index";
    }


    $url = "$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if ($parametros != false) {
        foreach ($parametros as $key => $valor) {
            $url .= "&$key=$valor";
        }
    }

    return $url;
}

//modulo carpeta dentro del controlador
//controlador archivo dentro de
//funcion metodo en el archivo controlador


function resolve()
{

    $modulo = ucwords($_GET['modulo']);
    $controlador = ucwords($_GET['controlador']);
    $funcion = $_GET['funcion'];

    if (is_dir("../controller/$modulo")) {

        if (file_exists("../controller/$modulo/" . $controlador . "Controller.php")) {

            include_once "../controller/$modulo/" . $controlador . "Controller.php";
            $nombreClase = $controlador . "Controller";
            $objClase = new $nombreClase();
            if (method_exists($objClase, $funcion)) {
                $objClase->$funcion();
            } else {

                "El método especificado no existe";
            }
        } else {

            echo "El controlador especificado no existe";
        }
    } else

        echo "El módulo especificado no existe";
}
