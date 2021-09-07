<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Detalle de ofertas</li>
    </ol>
</nav>

<!--Insertar-->
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

<!--Actualizar-->
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

<!-- Eliminar -->
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

