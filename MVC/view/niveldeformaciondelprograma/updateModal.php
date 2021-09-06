<?php
    foreach ($nivelformacion as $nivfor) {
?>
<form action="<?php echo getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","postUpdate"); ?>" method="post">
        <div class="modal-body">
            <div class="row">

                 <div class="col-md-6 form-group">
                        <label>Nivel de Programa</label>
                        <input type="text" name="nombre_prog" class="form-control" value="<?php echo $nivfor['nombre_prog'] ?>" minlength="9" maxlength="25" required pattern="[a-zA-Z \u00E0-\u00FC]+">
                        <input type="hidden" name="id_prog_niv" value="<?php echo $nivfor['id_prog_niv'] ?>" minlength="9" maxlength="25" required>
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
