<div class="row mt-4">
    <div class="col-md-3">
        <button style="margin-bottom: 10px" type="button" id="modal" class="btn btn-success" data-toggle="modal"
        data-target="#exampleModal" data-url="<?php echo getUrl("LineaTecnologica","LineaTecnologica",
        "getInsertModal",false,"ajax") ?>">
            Registrar
        </button>
    </div>   
</div>
<table class="table table-hover table-striped mt-3 table-light" id="tabla">
    <thead class="thead-dark" >
        <tr>
            <th>ID</th>
            <th>Líneas tecnológicas</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php

            foreach ($lineatecnologica as $linet) {
                echo "<tr>";

                    echo "<td>".$linet['lin_tec_cod']."</td>";
                    echo "<td>".$linet['lin_tec_desc']."</td>";
                    echo "<td><button id='editarModal' data-url='".getUrl("LineaTecnologica","LineaTecnologica","getUpdateModal",
                    false,"ajax")."' data-id='".$linet['lin_tec_cod']."' type='button' class='btn btn-primary'>Editar</button></td>";
                    echo "<td><button id='eliminarModal' data-url='".getUrl("LineaTecnologica","LineaTecnologica","getDeleteModal",
                    false,"ajax")."' data-id='".$linet['lin_tec_cod']."' type='button' class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>