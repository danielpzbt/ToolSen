<div class="jumbotron mt-4">
    <h3 class="display-4">Registrar Nivel de Programa</h3>
</div>

<form action="<?php echo getUrl("NivelDeFormacionDelPrograma","NivelDeFormacionDelPrograma","postInsert") ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">

        <div class="form-group col-md-4">
            <b><label>Nivel de Programa</label></b>
        </div>

        <div class="form-group col-md-8">
            <input type="text" name="nombre_prog" class="form-control" placeholder="nombre de Nivel de Programa">
           
        </div>
        
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>

    </div>
    
</form>