<?php

foreach ($ForoTema as $ForTema) {


?>
    <form action="<?php echo getUrl("ForoTema", "ForoTema", "postInsert") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
        <center><b><h4>Más detalles del Tema</h2></b></center>
            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>ID Tema:</label></b> <?php echo $ForTema['t_cod_tema']?>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <b><label>Descripción Tema:</label></b> <?php echo $ForTema['desc_tema']?>
                <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 form-group">
                    <b><label>Fecha de Creación:</label></b> <?php echo $ForTema['fecha_t'];
 ?>
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