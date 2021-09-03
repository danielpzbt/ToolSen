<form action="<?php echo getURL("ResultadoAprendizaje", "ResultadoAprendizaje", "postUpdate", false, "ajax") ?>" method="post">
    <defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    <div class="modal-body">
        <p class="mb-1 info">Los campos con <span class="required">*</span> son obligatorios</p>
        <div class="col-md-12">
            <label>Nombre Resultado de Aprendizaje<span class="required">*</span></label>
            <?php
                foreach ($resultadoApr as $resApr) {
                    echo "<input type='hidden' class='form-control' name='ReApCod' value='" . $resApr['ReApCod'] . "'>";
                    echo "<input type='text' class='form-control' name='ReApDesc' placeholder='" . $resApr['ReApDesc'] . "'value='" . $resApr['ReApDesc'] . "' required>";
                }
            ?>
        </div>
        <div class="col-md-12">
            <label>Competencia<span class="required">*</span></label>
            <select name="CompCod" class="form-control" required>
                <?php
                foreach ($resultadoApr as $resApr) {
                    echo "<option value='" . $resApr['CompCod'] . "'>" . $resApr['CompDesc'] . "</option>";
                }
                foreach ($resultadoApr as $resApr) {
                    $default=$resApr['CompCod'];
                }
                foreach ($competencia as $comp) {
                    if ($comp['codCD']!=$default) {
                        echo "<option value='" . $comp['codCD'] . "'>" . $comp['CompDesc'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</form>