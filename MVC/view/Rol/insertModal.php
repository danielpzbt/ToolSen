<form action="<?php echo getURL("Rol", "Rol", "postInsert", false, "ajax") ?>" method="post">
    <defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    <div class="modal-body">
        <p class="mb-1 info">Los campos con <span class="required">*</span> son obligatorios</p>
        <div class="col-md-12">
            <label>Nombre<span class="required">*</span></label>
            <input type="text" class="form-control" name="desc_rol" placeholder="Nombre Rol" required>
        </div>
        <div class="col-md-12">
            <label>Imagen<span class="required">*</span></label>
            <input type="file" class="form-control" name="imag_rol" style="padding: 4px;" accept="image/png, image/jpeg" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>