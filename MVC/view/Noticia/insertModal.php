<form action="<?php echo getURL("Noticia", "Noticia", "postInsert", false, "ajax") ?>" method="post" enctype="multipart/form-data">
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
            <?php foreach ($usuario as $usu) { ?>
            <div class="col-md-6">
                <label>Nombre:<span class="required">*</span></label>
                <input type="text" class="form-control" readonly placeholder="<?php echo $usu['usu_nombres'] ?>">
            </div>
            <div class="col-md-6">
                <label>Apellido:<span class="required">*</span></label>
                <input type="text" class="form-control" readonly placeholder="<?php echo $usu['usu_apellidos'] ?>">
            </div>
            <input type="hidden" class="form-control" name="usu_id" value="<?php echo $usu['usu_id'] ?>">
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Tipo de Noticia:<span class="required">*</span></label>
                <select name="cod_tipo_not" class="form-control" required>
                    <option value="">Seleccionar...</option>
                    <?php
                    foreach ($tiponoti as $tipo) {
                        echo "<option value='" . $tipo['cod_tipo_not'] . "'>" . $tipo['desc_tipo_not'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Título:<span class="required">*</span></label>
                <input type="text" name="tit_noti" class="form-control" placeholder="Título Noticia">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Descripción:<span class="required">*</span></label>
                <textarea name="desc_noti" class="form-control" rows="4" cols="63" style="padding: 5px 13px;" placeholder="Descripción Noticia"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label>Fecha Creación:</label>
                <input type="date" name="fech_noti" class="form-control" readonly value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d") ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Imagen:</label>
                <input type="file" name="imag_noti" class="form-control" style="padding:4px;" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>