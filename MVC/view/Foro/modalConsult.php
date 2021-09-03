<?php

foreach ($foro as $for) {


?>
    <form action="<?php echo getUrl("Foro", "Foro", "postInsert") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <center><b>
                    <h4>Más detalles del Foro</h2>
                </b></center>
            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>ID Foro:</label></b> <?php echo $for['cod_foro'] ?>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 form-group">
                    <b><label>ID Usuario:</label></b> <?php echo $for['t_usuario_usu_id'] ?>
                <hr>
                </div>

                <div class="col-md-5 form-group">
                    <b><label>Autor:</label></b> <?php echo $for['usu_nombres'] ?>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 form-group">
                    <b><label>Título:</label></b> <?php echo $for['titulo_f'] ?></b>
                <hr>
                </div>

                <div class="col-md-5 form-group">
                    <b><label>Tema:</label></b> <?php echo $for['desc_tema'] ?></b>
                <hr>
                </div>
            </div>




            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>Descripción:</label></b> <br><?php echo $for['descripcion_f'] ?></b>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <b><label>Fecha Inicio:</label></b> <?php echo $for['fecha_ini_f'] ?></b>
               <hr>
                </div>

                <div class="col-md-3 form-group">
                    <b><label>Fecha Fin:</label></b> <?php echo $for['fecha_fin_f'] ?></b>
                <hr>
                </div>

                <div class="col-md-4 form-group">
                    <b><label>Fecha Creación:</label></b> <?php echo $for['fecha_f'] ?></b>
                <hr>
                </div>
            </div>

        




            <div class="row">
                <div class="col-md-12">
                    <label>Imagen:</label>
                    <div id="cambiarImagen">
                        <img class="d-block" id="imagen" src="<?php echo $for['imagen_f'] ?>" width="150px">
                    </div>
                </div>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        </div>
    </form>

<?php

}

?>