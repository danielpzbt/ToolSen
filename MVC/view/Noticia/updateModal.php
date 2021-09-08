<form action="<?php echo getURL("Noticia", "Noticia", "postUpdate", false, "ajax") ?>" method="post">
    <defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-1 info">Los campos con <span class="required">*</span> son obligatorios</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Tipo de Noticia:<span class="required">*</span></label>
                <select name="cod_tipo_not" class="form-control" required>
                    <?php
                    foreach ($noticia as $noti) {
                        echo "<option value='" . $noti['cod_tipo_not'] . "'>" . $noti['desc_tipo_not'] . "</option>";
                        $default = $noti['cod_tipo_not'];
                    }
                    foreach ($tiponoti as $tipo) {
                        if ($tipo['cod_tipo_not']!=$default) {
                            echo "<option value='" . $tipo['cod_tipo_not'] . "'>" . $tipo['desc_tipo_not'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <?php foreach ($noticia as $noti) { ?>
        <div class="row">
            <div class="col-md-12">
                <label>Título:<span class="required">*</span></label>
                <input type="text" name="tit_noti" class="form-control" value="<?php echo $noti['tit_noti'] ?>" placeholder="<?php echo $noti['tit_noti'] ?>">
                <input type="hidden" name="cod_noti" value="<?php echo $noti['cod_noti'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Descripción:<span class="required">*</span></label>
                <textarea name="desc_noti" class="form-control" rows="4" cols="63" style="padding: 5px 13px;" placeholder="<?php echo $noti['desc_noti'] ?>"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Imagen:</label>
                <div id="cambiarImagen">
                    <img class="d-block" id="imagen" src="../web/img/<?php echo $noti['imag_noti'] ?>" width="150px">
                    <input type='hidden' class='form-control' name='imagen_f' value="<?php echo $noti['imag_noti'] ?>">
                    <button type="button" id="cambioImagen" class="btn btn-primary mt-3">Cambiar Imagen</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>