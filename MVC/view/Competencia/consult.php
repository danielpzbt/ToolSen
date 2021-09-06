<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Competencias</li>
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
            <th>Competencia</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($competencia as $comp) {
            echo "<tr>";
                echo "<td>" . $comp['CompCod'] . "</td>";
                echo "<td>" . $comp['CompDesc'] . "</td>";
                echo "<td>
                    <button  id='editarModal' data-url='" . getUrl("Competencia", "Competencia", "getUpdateModal", array("CompCod"=>$comp['CompCod']), "ajax") .
                    "' type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>
                </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<div class="row">
    <div class="col-md-3">
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Competencia", "Competencia", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>