<form action="<?php echo getUrl("NivelDeFormacionDelPrograma", "NivelDeFormacionDelPrograma", "postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <table class="table table-hover table-striped mt-3 table-light" id="tabla">
            <tr>
                <th>ID</th>
                <th>Nombre</th>

            </tr>

            <?php
            foreach ($nivelformacion as $nvf) {
            ?>


                <label>Nivel de programa</label>
                <div class="row">
                    <div class="col-md-12 form-group">

                        <tr>
                            <td> <?php echo $nvf['id_prog_niv'] ?> </td>

                            <td><?php echo $nvf['nombre_prog'] ?> </td>

                        </tr>

                    </div>
                </div>

    </div>

<?php

            }

?>
</table>

<div class="modal-footer">
    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
</div>
</form>