<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Tipo de documento</li>
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
            
            <th>Tipo de documento</th>
            <th>Sigla</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
       


        foreach ($TipoDocumento as $TipoDoc) {

            echo "<tr>";
            echo "<td>" . $TipoDoc['cod_tipo_doc'] . "</td>";
            
            
            echo "<td>" . $TipoDoc['nom_tipo_doc'] . "</td>";

            
            echo "<td>" . $TipoDoc['sigla_tipo_doc'] . "</td>";
            

            echo "<td>";
           

            echo "<button  id='editarModal' data-url='" . getUrl("TipoDocumento", "TipoDocumento", "getUpdateModal", false, "ajax") .
                "' data-id='" . $TipoDoc['cod_tipo_doc'] . "'type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button>";

        

            echo "<button  id='editarModal' data-url='" . getUrl("TipoDocumento", "TipoDocumento", "getinsertModal", false, "ajax") .
                "' data-id='" . $TipoDoc['cod_tipo_doc'] . "'type='button' class='btn btn-danger fas fa-trash'></button>";
            echo "</td>";
            echo "</tr>";
        }

        ?>
          </tbody>

</table>
<div class="row">
    <div class="col-md-3">
        <button type="button" id="modal" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("TipoDocumento", "TipoDocumento", "getInsertModal", false, "ajax") ?>">
            Registrar
        </button>
    </div>
</div>