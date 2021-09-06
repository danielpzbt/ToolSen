<form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <table class="table table-hover table-striped mt-3 table-light" id="tabla">
            <tr>
                <th>ID</th>
                <th>Nombre</th>

            </tr>

            <?php
            foreach ($lineatecnologica as $lintec) {
            ?>


                <label>Linea tecnologica</label>
                <div class="row">
                    <div class="col-md-12 form-group">

                        <tr>
                            <td> <?php echo $lintec['lin_tec_cod'] ?> </td>

                            <td><?php echo $lintec['lin_tec_desc'] ?> </td>

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