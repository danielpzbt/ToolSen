<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Noticias</li>
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
            <th>Autor</th>
            <th>Tipo</th>
            <th>Título</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($noticia as $noti) {
            if ($noti['id_estado'] == 1) {
                echo "<tr style='cursor:no-drop;'>";
                    echo "<td style='opacity:.3;'>" . $noti['cod_noti'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $noti['usu_nombres'] . " " . $noti['usu_apellidos'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $noti['desc_tipo_not'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $noti['tit_noti'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $noti['fech_noti'] . "</td>";
                    echo "<td><img src='../web/img/" . $noti['imag_noti'] . "' alt='" . $noti['imag_noti'] . "' style='opacity:.3;' width='100px' ></td>";
                    echo "<td>
                            <button  id='editarModal' type='button' style='opacity:.3;cursor:no-drop;' title='Modificar' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($noti['id_estado'] == 0) {
                            echo "<button  id='eliminar' data-estado='" . $noti['id_estado'] . "' data-valor='Noticia' data-url='" . getUrl("Noticia", "Noticia", "changeVisibility", false, "ajax") . "' data-id='" . $noti['cod_noti'] . "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                        }else {
                            echo "<button  id='eliminar' data-estado='" . $noti['id_estado'] . "' data-valor='Noticia' data-url='" . getUrl("Noticia", "Noticia", "changeVisibility", false, "ajax") . "' data-id='" . $noti['cod_noti'] . "' title='Habilitar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
                        }

                    echo "</td>";
                echo "</tr>";
            } else {
                echo "<tr>";
                    echo "<td>" . $noti['cod_noti'] . "</td>";
                    echo "<td>" . $noti['usu_nombres'] . " " . $noti['usu_apellidos'] . "</td>";
                    echo "<td>" . $noti['desc_tipo_not'] . "</td>";
                    echo "<td>" . $noti['tit_noti'] . "</td>";
                    echo "<td>" . $noti['fech_noti'] . "</td>";
                    echo "<td><img src='../web/img/" . $noti['imag_noti'] . "' alt='" . $noti['imag_noti'] . "' width='100px' ></td>";
                    echo "<td>

                        <button id='modal' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("Noticia", "Noticia", "consultModal", array("cod_noti"=>$noti['cod_noti']), "ajax") . "' type='button' class='btn btn-success fas fa-list-alt'></button>

                        <button id='editarModal' type='button' title='Modificar' data-url='" . getUrl("Noticia", "Noticia", "getUpdateModal", array("cod_noti"=>$noti['cod_noti']), "ajax") . "' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($noti['id_estado'] == 0) {
                            echo "<button  id='eliminar' data-estado='" . $noti['id_estado'] . "' data-valor='Noticia' data-url='" . getUrl("Noticia", "Noticia", "changeVisibility", false, "ajax") . "' data-id='" . $noti['cod_noti'] . "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                        } else {
                            echo "<button  id='eliminar' data-estado='" . $noti['id_estado'] . "' data-valor='Noticia' data-url='" . getUrl("Noticia", "Noticia", "changeVisibility", false, "ajax") . "' data-id='" . $noti['cod_noti'] . "' title='Habilitar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
                        }

                    echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<div class="row">
    <div class="col-md-3">
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Noticia", "Noticia", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>
