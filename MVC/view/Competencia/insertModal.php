<form action="<?php echo getURL("Competencia", "Competencia", "postInsert", false, "ajax") ?>" method="post">
    <defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    <div class="modal-body">
        <p class="mb-1 info">Los campos con <span class="required">*</span> son obligatorios</p>
        <div class="col-md-12">
            <label>Name<span class="required">*</span></label>
            <input type="text" class="form-control" name="CompDesc" placeholder="Nombre Competencia" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</form>