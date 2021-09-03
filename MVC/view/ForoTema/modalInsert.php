<form action="<?php echo getUrl("ForoTema", "ForoTema", "postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Tema</label>
                <input type="text" name="desc_tema" class="form-control" placeholder="Ingresa el Tema" required>
            </div>

            <div class="form-group col-md-6">
                <label>Fecha hoy</label>
                <input type="date" id="fecha_t" name="fecha_t" readonly class="form-control" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d") ?>">
                <p>*Este campo es automático*</p>
            </div>
        </div>

        <p>Registra tu Tema.</p>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>