<div class="row mt-4">
    <div class="col-md-3">
        <button style="margin-bottom: 10px" type="button" id="modal" class="btn btn-success" data-toggle="modal"
        data-target="#exampleModal" data-url="<?php echo getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma",
        "getInsertModal",false,"ajax") ?>">
            Registrar
        </button>
    </div>   
</div>
<table class="table table-hover table-striped mt-3 table-light" id="tabla">
    <thead class="thead-dark" >
        <tr>
            <th>ID</th>
            <th>Nivel de Programa</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php

            foreach ($nivelformacion as $nivfor) {
                echo "<tr>";

                    echo "<td>".$nivfor['id_prog_niv']."</td>";
                    echo "<td>".$nivfor['nombre_prog']."</td>";
                    echo "<td><button id='editarModal' data-url='".getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","getUpdateModal",
                    false,"ajax")."' data-id='".$nivfor['id_prog_niv']."' type='button' class='btn btn-primary'>Editar</button></td>";
                    echo "<td><button id='eliminarModal' data-url='".getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","getDeleteModal",
                    false,"ajax")."' data-id='".$nivfor['id_prog_niv']."' type='button' class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>