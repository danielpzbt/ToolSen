<?php

foreach ($ForoTema as $ForTema) {


?>
    <form action="<?php echo getUrl("ForoTema", "ForoTema", "postUpdate") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Titulo</label>
                    <input type="text" name="desc_tema" required class="form-control" value="<?php echo $ForTema['desc_tema'] ?>">
                    <input type="hidden" name="t_cod_tema"  value="<?php echo $ForTema['t_cod_tema'] ?>">
                </div>
            </div>

            <p>Edita tu Tema.</p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
<?php

}
?>