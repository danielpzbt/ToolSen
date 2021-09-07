<div >
    <center>
        <h3 class="display-4">Crear oferta</h3>
    </center>
    <center>
        
            <h4>Ingresa los siguientes datos para crear la oferta</h4>
        
    </center>
</div>
<form action="<?php echo getUrl("Oferta", "Oferta", "postInsert"); ?>" method="POST" enctype="multipart/form-data">

    <center>
        <nav aria-label="breadcrumb">
            <ol >
                <li class="breadcrumb-item active" aria-center="page">Información de la oferta</li>
            </ol>
        </nav>
    </center>

    <center>
    <div class="row">
        
    <input type="hidden" name="t_oferta_detalle">
        
        <div class="form-group col-md-7">
            <b><label>Nombre de la ferta:</label></b>
         </div>
        
        <div class="form-group col-md-5">
            <input type="text" name="" class="" placeholder="" maxlength="" required>
            <b><p></p></b>
        </div>
     

        <div class="form-group col-md-7" >
        <b><label>Detalle de la oferta:</label></b>
        </div>
        <div class="form-group col-md-5" >
            <select class="" name="" id="" required>
                <option value="">Seleccione</option>
        <?php
        
        foreach ($DetalleOFerta as $DetalleOfe) {

            echo "<option value='" . $DetalleOfe[''] . "'>" . $DetalleOfer[''] . "</option>";

        }

        ?>
        </select>
        </div>

        <div class="form-group col-md-7">
        <b><label>Descripción:</label></b>
        </div>


        <div class="form-group col-md-5">
            <textarea name=""  id="" cols="" class="" rows="" maxlength="1800" required></textarea>

        </div>



        <div class="form-group col-md-7">
        <b><label>Fecha Inicio:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="" class="" required value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">
        </div>

        <div class="form-group col-md-7">
        <b><label>Fecha Final:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="" class="" required value="<?php echo "" ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">


        </div>


        <div class="form-group col-md-7">
        <b><label>Imagen:</label></b>
        </div>

        
            <div class="col-md-5">
                 <input type="file" id="fil" name="imagen_f" class="" required>
                 <b><p></p></b>
            </div>

        </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Crear" class="btn btn-success">
            <a href="<?php echo getUrl("Oferta", "Oferta", "Consult"); ?>"><button type="button" class="btn btn-dark">Volver</button></a>

        </div>

    </div>

</form>
