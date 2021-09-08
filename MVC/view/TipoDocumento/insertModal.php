
<form action="<?php echo getUrl("TipoDocumento", "TipoDocumento", "postInsert"); ?>" method="POST" enctype="multipart/form-data">


<defs>
        <style>.info{font-size: 13px;color:#707070;float:right}.required{color:red;}.limit{color:grey;}</style>
    </defs>
    
         <div class="col-md-12">
            <label>Sigla<span class="required">*</span></label>
            <input type="text" class="form-control" name="nom_tipo_doc" placeholder="sigla documento" required>
        </div>
        

        <div class="form-group col-md-7" >
        
        

        <b><label>Seleccione tipo de documento:</label></b>
        </div>
        <div class="form-group col-md-5" >
            <select class="form-control" name="t_tipo_documento" id="" required>
            <option  value = " pasta " > Cédula </option >
        <option  value = " jugo " > Tarjeta de identidad</option>
   
        <?php
        
        
         foreach ($TipoDocumento as $TipoDoc) {
 
             echo "<option value='" . $TipoDocumento['cod_tipo_doc'] . "'>" . "</option>";
 
         }
 
         ?>
         </select>
         <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>
        
        
           
     
