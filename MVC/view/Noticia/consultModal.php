<?php foreach ($noticia as $noti) { ?>
    <form action="<?php echo getUrl("Foro", "Foro", "postInsert") ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <center><b>
                    <h4>Descripción</h2>
                </b></center>

            <div class="row">
                <div class="col-md-12 form-group">
                    <p><?php echo $noti['desc_noti'] ?></p>
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