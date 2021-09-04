<form action="<?php echo getURL("Rol", "Rol", "postUpdate", false, "ajax") ?>" method="post">
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
                <?php
                foreach ($rol as $roles) {
                    echo "<label>Nombre:<span class='required'>*</span></label>";
                    echo "<input type='hidden' name='cod_rol' value='" . $roles['cod_rol'] . "'>";
                    echo "<input type='text' name='desc_rol' class='form-control' required maxlength='25' placeholder='" . $roles['desc_rol'] . "' value='" . $roles['desc_rol'] . "'>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                foreach ($rol as $roles) {
                    echo "<label>Imagen:<span class='required'>*</span></label>";
                    echo "<div id='cambiarImagen'>";
                        echo "<img class='d-block' id='imag_rol' src='../web/img/" . $roles['imag_rol'] . "' width='150px'>";
                        echo "<button type='button' id='cambioImagen' class='btn btn-primary mt-3'>Cambiar Imagen</button>";
                    echo "</div>";
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