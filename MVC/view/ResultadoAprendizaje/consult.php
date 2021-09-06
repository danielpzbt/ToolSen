<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Resultados de Aprendizaje</li>
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
            <th>Resultado Aprendizaje</th>
            <th>Competencia</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($resultadoApr as $resApr) {
            echo "<tr>";
                echo "<td>" . $resApr['ReApCod'] . "</td>";
                echo "<td>" . $resApr['ReApDesc'] . "</td>";
                echo "<td>" . $resApr['CompDesc'] . "</td>";
                echo "<td>
                    <button  id='editarModal' data-url='" . getUrl("ResultadoAprendizaje", "ResultadoAprendizaje", "getUpdateModal", array("ReApCod"=>$resApr['ReApCod']), "ajax") .
                    "' type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>
                </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<div class="row">
    <div class="col-md-3">
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("ResultadoAprendizaje", "ResultadoAprendizaje", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>