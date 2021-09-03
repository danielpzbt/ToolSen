<?php

foreach ($foro as $for) {

?>
    <form action="<?php echo getUrl("Foro", "Foro", "postDelete"); ?>" method="post">
        <div class="modal-body">
            <div class="row">

            <div class="col-md-6 form-group">
                    <label>ID Foro</label>
                    <input type="text" name="cod_foro" class="form-control" readonly value="<?php echo $for['cod_foro']; ?>"><br>

                </div>
                <div class="col-md-6 form-group">
                    <label>Titulo Foro</label>
                    <input type="hidden" name="cod_foro" value="<?php echo $for['cod_foro']; ?>">
                    <input type="text" name="titulo_f" class="form-control" readonly value="<?php echo $for['titulo_f']; ?>"><br>


                </div>

                <div class="col-md-6 form-group">
                    <label>Tema Foro</label>
                    <input type="text" name="desc_tema" class="form-control" readonly value="<?php echo $for['desc_tema']; ?>">
                    <p>¿Estás seguro de eliminar el Foro?</p>

                </div>

            </div>

        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>


    </form>
<?php
}
?>