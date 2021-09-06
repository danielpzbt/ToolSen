<?php

foreach ($foros as $for) {


?>
    <form action="<?php echo getUrl("Foro", "Foro", "postUpdate") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Titulo:</label>
                    <input type="text" name="titulo_f" class="form-control" required maxlength="31" value="<?php echo $for['titulo_f'] ?>">
                    <b><p>*máximo 31 caracteres*</p></b>
                    <input type="hidden" name="cod_foro" value="<?php echo $for['cod_foro'] ?>">
                </div>

                <div class="col-md-6 form-group">
                    <label>Tema:</label>
                    <select name="t_tema_t_cod_tema" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php

                        foreach ($ForoTema as $ForTema) {
                            if ($for['t_tema_t_cod_tema'] == $ForTema['t_cod_tema']) {
                                $select = "selected";
                            } else {

                                $select = "";
                            }

                            echo "<option value='" . $ForTema['t_cod_tema'] . "' $select>" . $ForTema['desc_tema'] . "</option>";
                        }

                        ?>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                <label>Fecha Inicio: </label>
                <input type="date" id="fecha" name="fecha_ini_f" class="form-control" min="<?php echo date("Y-m-d") ?>" value="<?php echo $for['fecha_ini_f']?>">
                </div>

                <div class="col-md-6 form-group">
                <label>Fecha Fin: </label>
                <input type="date" id="fecha" name="fecha_fin_f" class="form-control" min="<?php echo date("Y-m-d") ?>" value="<?php echo $for['fecha_fin_f']?>">
                </div>
                
            </div>

            <div class="row">

                <div class="col-md-12 form-group">
                    <label>Descripción:</label>
                    <textarea name="descripcion_f" id="#" cols="127" rows="10" required class="form-control"><?php echo $for['descripcion_f']?></textarea>
                    <b><p>Si desea realizar un salto de renglon imprima la etiqueta <ㅤbrㅤ></p></b>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <label>Imagen:</label>
                    <div id="cambiarImagen">
                        <img class="d-block" id="imagen" src="<?php echo $for['imagen_f'] ?>" width="150px">
                        <button type="button" id="cambioImagen" class="btn btn-primary mt-3">Cambiar Imagen</button>
                    </div>
                </div>
            </div>



            <p class="mt-2">Edita tu Foro</p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
<?php

}
?>