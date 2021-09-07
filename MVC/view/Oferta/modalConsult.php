<?php

foreach ($oferta as $ofe) {


?>
    <form action="<?php echo getUrl("Foro", "Foro", "postInsert") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <center><b>
                    <h4>Más detalles de la oferta</h2>
                </b></center>
            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>ID oferta:</label></b> <?php echo $ofe[''] ?>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 form-group">
                    <b><label>ID Usuario:</label></b> <?php echo $ofe['t_usuario_usu_id'] ?>
                <hr>
                </div>

                <div class="col-md-5 form-group">
                    <b><label>Autor:</label></b> <?php echo $ofe['usu_nombres'] ?>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 form-group">
                    <b><label>Título:</label></b> <?php echo $ofe['titulo_f'] ?></b>
                <hr>
                </div>

                <div class="col-md-5 form-group">
                    <b><label></label></b> <?php echo $ofe[''] ?></b>
                <hr>
                </div>
            </div>




            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>Descripción:</label></b> <br><?php echo $for['descripcion_o'] ?></b>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <b><label>Fecha Inicio:</label></b> <?php echo $for['fecha_ini_o'] ?></b>
               <hr>
                </div>

                <div class="col-md-3 form-group">
                    <b><label>Fecha Fin:</label></b> <?php echo $for['fecha_fin_o'] ?></b>
                <hr>
                </div>

                <div class="col-md-4 form-group">
                    <b><label>Fecha Creación:</label></b> <?php echo $for['fecha_o'] ?></b>
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