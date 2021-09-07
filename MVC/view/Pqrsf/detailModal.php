<?php
foreach ($pqrsfdetail as $pqrsf) {
?>
    <div class="modal-body">
        <p class="mb-1 info">Obersevación del PQRSF</p>
        <div class="col-md-12">
            <textarea class="form-control" rows="5" name="pqrsf_observacion" required><?php echo $pqrsf['pqrsf_observacion'] ?></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
<?php
}
?>