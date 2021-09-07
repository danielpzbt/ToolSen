<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Detalles del PQRSF</li>
    </ol>
</nav>
<table class="table table-hover table-striped mt-3 table-light" id="tabla">

    <thead class="thead-dark">

        <tr>
            <th>ID</th>
            <th>Tipo PQRSF</th>
            <th>Usuario</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>
        <?php
        foreach ($pqrsfconsult as $pqrsf) {
            echo "<tr>";
            echo "<td>" . $pqrsf['cod_pqrsf'] . "</td>";
            echo "<td>" . $pqrsf['pqrsf_tipo_desc'] . "</td>";
            echo "<td>" . $pqrsf['usu_id'] . "</td>";
            echo "<td>" . $pqrsf['desc_estado'] . "</td>";
            echo "<td>" . $pqrsf['pqrsf_fech'] . "</td>";  
            echo "<td>";
                echo "<button  id='detailModalPqrsf' data-url='" . getUrl("Pqrsf", "Pqrsf", "getDetail", false, "ajax") .
                "' data-id='" . $pqrsf['cod_pqrsf'] . "'type='button' class='btn btn-success fas fa-list-alt'></button>";
                echo "<button id='responderModal' data-url='" . getUrl("Pqrsf", "Pqrsf", "getAnswer", false, "ajax") . "' data-id='" . $pqrsf['cod_pqrsf'] . "' type='button' class='btn btn-primary fas fa-edit ml-2 mr-2'></button> ";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>


</table>