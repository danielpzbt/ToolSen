<form action="<?php echo getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">


        <div class="col-md-12 form-group">
            <label>Nivel de Programa</label>
            <input type="text" name="nombre_prog" class="form-control" placeholder="nombre de Nivel de Programa" minlength="9" maxlength="25" required>
        </div>
        

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>