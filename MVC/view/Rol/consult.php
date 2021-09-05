<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Roles</li>
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
            <th>Rol</th>
            <th>Image</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($rol as $roles) {
            if ($roles['estado_r'] == 1) {
                echo "<tr style='cursor:no-drop;'>";
                    echo "<td style='color:#C9C9C9;'>" . $roles['cod_rol'] . "</td>";
                    echo "<td style='color:#C9C9C9;'>" . $roles['desc_rol'] . "</td>";
                    echo "<td><img src='../web/img/" . $roles['imag_rol'] . "' alt='" . $roles['imag_rol'] . "' style='opacity:.5;' width='100px' ></td>";
                    echo "<td>
                            <button  id='editarModal' type='button' style='opacity:.5;cursor:no-drop;' title='Modificar' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($roles['cod_rol'] == 1) {
                            if ($roles['estado_r'] == 0) {
                                echo "<button  id='eliminar' title='No permitido' style='cursor:no-drop;' type='button' class='btn btn-disable fas fa-eye-slash mr-2'></button>";
                            }
                        } else {
                            if ($roles['estado_r'] == 0) {
                                echo "<button  id='eliminar' data-estado='" . $roles['estado_r'] . "' data-valor='Rol' data-url='" . getUrl("Rol", "Rol", "changeVisibility", false, "ajax") . "' data-id='" . $roles['cod_rol'] . "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                            } else {
                                echo "<button  id='eliminar' data-estado='" . $roles['estado_r'] . "' data-valor='Rol' data-url='" . getUrl("Rol", "Rol", "changeVisibility", false, "ajax") . "' data-id='" . $roles['cod_rol'] . "' title='Habilitar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
                            }

                        }

                    echo "</td>";
                echo "</tr>";
            } else {
                echo "<tr>";
                    echo "<td>" . $roles['cod_rol'] . "</td>";
                    echo "<td>" . $roles['desc_rol'] . "</td>";
                    echo "<td><img src='../web/img/" . $roles['imag_rol'] . "' alt='" . $roles['imag_rol'] . "' width='100px' ></td>";
                    echo "<td>
                            <button  id='editarModal' data-url='" . getUrl("Rol", "Rol", "getUpdateModal", array("cod_rol"=>$roles['cod_rol']), "ajax") . "' type='button' title='Modificar' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

                        if ($roles['cod_rol'] == 1) {
                            if ($roles['estado_r'] == 0) {
                                echo "<button  id='eliminar' title='No permitido' style='cursor:no-drop;' type='button' class='btn btn-disable fas fa-eye-slash mr-2'></button>";
                            }
                        } else {
                            if ($roles['estado_r'] == 0) {
                                echo "<button  id='eliminar' data-estado='" . $roles['estado_r'] . "' data-valor='Rol' data-url='" . getUrl("Rol", "Rol", "changeVisibility", false, "ajax") . "' data-id='" . $roles['cod_rol'] . "' title='Inhabilitar' type='button' class='btn btn-warning fas fa-eye-slash mr-2'></button>";
                            } else {
                                echo "<button  id='eliminar' data-estado='" . $roles['estado_r'] . "' data-valor='Rol' data-url='" . getUrl("Rol", "Rol", "changeVisibility", false, "ajax") . "' data-id='" . $roles['cod_rol'] . "' title='Habilitar' type='button' class='btn btn-success fas fa-eye mr-2'></button>";
                            }

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
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Rol", "Rol", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>