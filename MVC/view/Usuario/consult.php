<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
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
            <th>Nombre</th>
            <th>Rol</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($usuario as $usu) {
            if ($usu['estado_u'] == 1) {
                echo "<tr style='cursor:no-drop;'>";
                    echo "<td style='opacity:.3;'>" . $usu['usu_id'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $usu['usu_nombres'] . " " . $usu['usu_apellidos'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $usu['desc_rol'] . "</td>";
                    echo "<td style='opacity:.3;'>" . $usu['nom_tipo_doc'] . " (" . $usu['sigla_tipo_doc'] . ")</td>";
                    echo "<td style='opacity:.3;'>" . $usu['usu_correo'] . "</td>";
                    echo "<td>";
                        echo "<button style='opacity:.3;cursor:no-drop;' type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($usu['estado_u'] == 0) {
                            echo "<button  id='eliminar' data-estado='" . $usu['estado_u'] . "' data-valor='Usuario' data-url='" . getUrl("Usuario", "Usuario", "changeVisibility", false, "ajax") . "' data-id='" . $usu['usu_id'] .  "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                        } else {
                            echo "<button  id='eliminar' data-estado='" . $usu['estado_u'] . "' data-valor='Usuario' data-url='" . getUrl("Usuario", "Usuario", "changeVisibility", false, "ajax") . "' data-id='" . $usu['usu_id'] . "' title='Activar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
                        }
                    echo "</td>";
                echo "</tr>";
            } else {
                echo "<tr>";
                    echo "<td>" . $usu['usu_id'] . "</td>";
                    echo "<td>" . $usu['usu_nombres'] . " " . $usu['usu_apellidos'] . "</td>";
                    echo "<td>" . $usu['desc_rol'] . "</td>";
                    echo "<td>" . $usu['nom_tipo_doc'] . " (" . $usu['sigla_tipo_doc'] . ")</td>";
                    echo "<td>" . $usu['usu_correo'] . "</td>";
                    echo "<td>";
                        echo "<button  id='editarModal' data-url='" . getUrl("Usuario", "Usuario", "getUpdateModal", array("usu_id"=>$usu['usu_id']), "ajax") . "' title='Modificar' type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($usu['estado_u'] == 0) {
                            echo "<button  id='eliminar' data-estado='" . $usu['estado_u'] . "' data-valor='Usuario' data-url='" . getUrl("Usuario", "Usuario", "changeVisibility", false, "ajax") . "' data-id='" . $usu['usu_id'] .  "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                        } else {
                            echo "<button  id='eliminar' data-estado='" . $usu['estado_u'] . "' data-valor='Usuario' data-url='" . getUrl("Usuario", "Usuario", "changeVisibility", false, "ajax") . "' data-id='" . $usu['usu_id'] . "' title='Activar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
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
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Usuario", "Usuario", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>
