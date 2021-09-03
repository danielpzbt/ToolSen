<?php
    foreach ($nivelformacion as $nivfor) {
?>
    <form action="<?php echo getUrl("NivelDeFormacionDelPrograma", "NivelDeFormacionDelPrograma", "postDelete") ?>" method="post">
        <div class="modal-body" >
            <div class="col-md-6 form-group">
                <label>Linea tecnologica</label>
                <input type="hidden" name="id_prog_niv" value="<?php echo $nivfor['id_prog_niv']; ?>">
                <input type="text" readonly name="nombre_prog" class="form-control" value="<?php echo $nivfor['nombre_prog'] ?>">
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