<?php
    foreach ($lineatecnologicas as $lintec) {
?>
<form action="<?php echo getUrl("LineaTecnologica","LineaTecnologica","postUpdate"); ?>" method="post">
        <div class="modal-body">
            <div class="row">

                 <div class="col-md-6 form-group">
                        <label>Linea tecnologica</label>
                        <input type="text" name="lin_tec_desc" class="form-control" value="<?php echo $lintec['lin_tec_desc'] ?>" minlength="18" maxlength="100" required pattern="[a-zA-Z \u00E0-\u00FC]+">
                        <input type="hidden" name="lin_tec_cod" value="<?php echo $lintec['lin_tec_cod'] ?>" >
                </div>

            </div>
        </div>
            
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
<?php
    }
?>
