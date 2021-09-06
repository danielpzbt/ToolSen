<form action="<?php echo getURL("ResultadoAprendizaje", "ResultadoAprendizaje", "postInsert", false, "ajax") ?>" method="post">
    <defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    <div class="modal-body">
        <p class="mb-1 info">Los campos con <span class="required">*</span> son obligatorios</p>
        <div class="col-md-12">
            <label>Nombre Resultado de Aprendizaje<span class="required">*</span></label>
            <input type="text" class="form-control" name="ReApDesc" placeholder="Nombre Competencia" required>
        </div>
        <div class="col-md-12">
            <label>Competencia<span class="required">*</span></label>
            <select name="CompCod" class="form-control" required>
                <option value="">Seleccionar...</option>
                <?php
                foreach ($competencia as $comp) {
                    echo "<option value='" . $comp['CompCod'] . "'>" . $comp['CompDesc'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>