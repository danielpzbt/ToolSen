<form action="<?php echo getURL("Usuario", "Usuario", "postUpdate", false, "ajax") ?>" method="post">
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
            <div class="col-md-6">
                <label>Nombre:<span class='required'>*</span></label>
                <?php
                foreach ($usuario as $usu) {
                    echo "<input type='hidden' name='usu_id' value='" . $usu['usu_id'] . "'>";
                    echo "<input type='text' name='usu_nombre' class='form-control' required maxlength='25' placeholder='" . $usu['usu_nombres'] . "' value='" . $usu['usu_nombres'] . "'>";
                }
                ?>
            </div>
            <div class="col-md-6">
                <label>Apellido:<span class='required'>*</span></label>
                <?php
                foreach ($usuario as $usu) {
                    echo "<input type='hidden' name='usu_id' value='" . $usu['usu_id'] . "'>";
                    echo "<input type='text' name='usu_nombre' class='form-control' required maxlength='25' placeholder='" . $usu['usu_apellidos'] . "' value='" . $usu['usu_apellidos'] . "'>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Rol:<span class='required'>*</span></label>
                <select class="form-control" name="cod_rol">
                    <?php
                        foreach ($usuario as $usu) {
                            echo "<option value='" . $usu['cod_rol'] . "' selected>" . $usu['desc_rol'] . "</option>";
                            $default=$usu['cod_rol'];
                        }
                        foreach ($roles as $rol) {
                            if ($rol['cod_rol']!=$default) {
                                echo "<option value='" . $rol['cod_rol'] . "'>" . $rol['desc_rol'] . "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Tipo Documento:<span class='required'>*</span></label>
                <select class="form-control" name="cod_rol">
                    <?php
                        foreach ($usuario as $usu) {
                            echo "<option value='" . $usu['cod_tipo_doc'] . "' selected>" . $usu['nom_tipo_doc'] . "</option>";
                            $default=$usu['cod_tipo_doc'];
                        }
                        foreach ($documento as $doc) {
                            if ($doc['cod_tipo_doc']!=$default) {
                                echo "<option value='" . $doc['cod_tipo_doc'] . "'>" . $doc['nom_tipo_doc'] . "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Número de Documento:<span class='required'>*</span></label>
                <?php
                foreach ($usuario as $usu) {
                    echo "<input type='text' name='n_documento' class='form-control' required maxlength='25' placeholder='" . $usu['n_documento'] . "' value='" . $usu['n_documento'] . "'>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Correo:<span class='required'>*</span></label>
                <?php
                foreach ($usuario as $usu) {
                    echo "<input type='text' name='usu_correo' class='form-control' required maxlength='25' placeholder='" . $usu['usu_correo'] . "' value='" . $usu['usu_correo'] . "'>";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>