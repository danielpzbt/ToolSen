



    <form action="<?php echo getUrl("TipoDocumento", "TipoDcumento", "postUpdate") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
            <div class="col-md-12">
                <?php
                foreach ($TipoDocumento as $TipoDoc) {
                    echo "<label>Nombre:<span class='required'>*</span></label>";
                    echo "<input type='hidden' name='cod_tipo_doc' value='" . $TipoDoc['cod_tipo_doc'] . "'>";
                    echo "<input type='text' name='nom_tipo_doc' class='form-control' required maxlength='25' placeholder='" . $TipoDoc['nom_tipo_doc'] . "' value='" . $TipoDoc['nom_tipo_doc'] . "'>";
                }
                ?>
            </div>
                

                <div class="col-md-6 form-group">
                    <label>Tipo De Documento:</label>
                    <select name="nom_tipo_doc" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php

                        foreach ($TipoDocumento as $TipoDoc) {
                            if ($TipoDoc['t_tipo_documento'] == $TipoDoc['cod_tipo_doc']) {
                                $select = "selected";
                            } else {

                                $select = "";
                            }

                            echo "<option value='" . $TipoDoc['cod_tipo_doc'] . "' $select>" .  "</option>";
                        }

                        ?>
                    </select>

                </div>
            </div>

            <div class="col-md-12">
                <?php
                foreach ($TipoDocumento as $TipoDoc) {
                    echo "<label>Nombre:<span class='required'>*</span></label>";
                    echo "<input type='hidden' name='cod_tipo_doc' value='" . $TipoDoc['cod_tipo_doc'] . "'>";
                    echo "<input type='text' name='sigla_tipo_doc' class='form-control' required maxlength='25' placeholder='" . $TipoDoc['sigla_tipo_doc'] . "' value='" . $TipoDoc['sigla_tipo_doc'] . "'>";
                }
                ?>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>

