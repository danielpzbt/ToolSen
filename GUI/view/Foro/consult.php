
<br>
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Detalles del Foro</li>
        </ol>
</nav>

<!-- Mensaje Insertar -->
<?php

if (isset($_SESSION['mensaje'])) {

?>

    <div class="alert alert-success alert-dimissible fade show mt-4" id="alerta" role="alert">
        <?= $_SESSION['mensaje'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>

        </button>
    </div>


<?php

    unset($_SESSION['mensaje']);
}

?>

<!-- Mensaje Actualizar -->
<?php

if (isset($_SESSION['mensajeUpdate'])) {

?>

    <div class="alert alert-primary alert-dimissible fade show mt-4" id="alerta" role="alert">
        <?= $_SESSION['mensajeUpdate'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>

        </button>
    </div>


<?php

    unset($_SESSION['mensajeUpdate']);
}

?>

<!-- Mensaje Eliminar -->
<?php

if (isset($_SESSION['mensajeDelete'])) {

?>

    <div class="alert alert-danger alert-dimissible fade show mt-4" id="alerta" role="alert">
        <?= $_SESSION['mensajeDelete'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>

        </button>
    </div>


<?php

    unset($_SESSION['mensajeDelete']);
}

?>


<table class="table table-hover table-striped mt-3 table-light" id="tabla">


    <thead class="thead-dark">

        <tr>

            <th>ID</th>
            <!--<th>Usuario</th>-->
            <th>Título</th>
            <th>Tema</th>
            <!--<th>Descripción</th>-->
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Imagen</th>
            <th>Acciones</th>



        </tr>


    </thead>
    <tbody>
        <?php

        foreach ($foros as $for) {

            echo "<tr>";
            echo "<td>" . $for['cod_foro'] . "</td>";
           // echo "<td>" . $for['t_usuario_usu_id'] . "</td>";
            echo "<td>" . $for['titulo_f'] . "</td>";
            echo "<td>" . $for['desc_tema'] . "</td>";

            //echo "<td>" . $for['descripcion_f'] . "</td>";
            echo "<td>" . $for['fecha_ini_f'] . "</td>";
            echo "<td>" . $for['fecha_fin_f'] . "</td>";
            echo "<td><img src='" . $for['imagen_f'] . "' width='100px' ></td>";

            echo "<td>";
            echo "<button  id='editarModal' data-url='" . getUrl("Foro", "Foro", "getConsultModal", false, "ajax") .
                "' data-id='" . $for['cod_foro'] . "'type='button' class='btn btn-success fas fa-list-alt'></button>";
            
            echo "<button  id='editarModal' data-url='" . getUrl("Foro", "Foro", "getUpdateModal", false, "ajax") .
                "' data-id='" . $for['cod_foro'] . "'type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

            echo "<button  id='eliminarModal' data-url='" . getUrl("Foro", "Foro", "getDeleteModal", false, "ajax") .
                "' data-id='" . $for['cod_foro'] . "'type='button' class='btn btn-danger fas fa-times'></button>";
            echo "</td>";
                echo "</tr>";
        }

        ?>



    </tbody>

</table>
