<?php
    foreach ($lineatecnologicas as $lintec) {
?>
    <form action="<?php echo getUrl("LineaTecnologica", "LineaTecnologica", "postDelete") ?>" method="post">
        <div class="modal-body" >
            <div class="col-md-6 form-group">
                <label>Linea tecnologica</label>
                <input type="hidden" name="lin_tec_cod" value="<?php echo $lintec['lin_tec_cod']; ?>">
                <input type="text" readonly name="lin_tec_desc" class="form-control" value="<?php echo $lintec['lin_tec_desc'] ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </form>
<?php
}
?>