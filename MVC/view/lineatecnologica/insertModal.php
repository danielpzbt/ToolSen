<form action="<?php echo getUrl("LineaTecnologica","LineaTecnologica","postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">


        <div class="col-md-12 form-group">
            <label>linea tecnologica</label>
            <input type="text" name="lin_tec_desc" class="form-control" placeholder="nombre de linea tecnologica" minlength="9" maxlength="100" required pattern="[a-zA-Z \u00E0-\u00FC]+" >
        </div>
        

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>