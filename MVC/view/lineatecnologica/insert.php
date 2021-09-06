<div class="jumbotron mt-4">
    <h3 class="display-4">Registrar linea tecnologica</h3>
</div>

<form action="<?php echo getUrl("LineaTecnologica","LineaTecnologica","postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">

        <div class="form-group col-md-7">
            <b><label>linea tecnologica</label></b>
        </div>

        <div class="form-group col-md-8">
            <input type="text" name="lin_tec_desc" class="form-control" placeholder="nombre de linea tecnologica">
           
        </div>
        
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>

    </div>
    
</form>