<?php

foreach ($ForoTema as $ForTema) {


?>
    <form action="<?php echo getUrl("ForoTema", "ForoTema", "postDelete") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Tema</label>

                    <input type="text" name="desc_tema" readonly class="form-control" value="<?php echo $ForTema['desc_tema'] ?>">
                    <input type="hidden" name="t_cod_tema" value="<?php echo $ForTema['t_cod_tema'] ?>">

                </div>
                
            </div>
            <p>¿Está seguro de eliminar <?php echo $ForTema['desc_tema']?> ? </p>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
    </form>
<?php

}
?>