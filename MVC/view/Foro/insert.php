<div class="jumbotron mt-4" style="background-image: url('https://www.vivablogger.com/wp-content/uploads/2018/03/como-crear-un-foro-en-wordpress-con-wpforo.png')">
    <center>
        <h3 class="display-4">Crea Tu Foro</h3>
    </center>
    <center>
        
            <h4>Ingresa los siguientes datos para crear el Foro</h4>
        
    </center>
</div>
<form action="<?php echo getUrl("Foro", "Foro", "postInsert"); ?>" method="POST" enctype="multipart/form-data">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Información del Foro</li>
        </ol>
    </nav>

    <div class="row">

        <div class="form-group col-md-7">
        <b><label>Título del Foro:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="text" name="titulo_f" class="form-control" placeholder="Título Foro">
        </div>


        <div class="form-group col-md-7">
        <b><label>Seleccione el Tema del Foro:</label></b>
        </div>
        <div class="form-group col-md-5">
            <select class="form-control" name="t_tema_t_cod_tema" id="">
                <option value="">Seleccione...</option>
        <?php
        
        foreach ($ForoTemas as $ForoTem) {

            echo "<option value='" . $ForoTem['t_cod_tema'] . "'>" . $ForoTem['desc_tema'] . "</option>";

        }

        ?>
        </select>
        </div>

        <div class="form-group col-md-7">
        <b><label>Descripción:</label></b>
        </div>


        <div class="form-group col-md-5">
            <textarea name="descripcion_f" id="#" cols="127" class="form-control" rows="10"></textarea>

        </div>



        <div class="form-group col-md-7">
        <b><label>Fecha Inicio:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="fecha_ini_f" class="form-control" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">
        </div>

        <div class="form-group col-md-7">
        <b><label>Fecha Final:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="fecha_fin_f" class="form-control" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">


        </div>


        <div class="form-group col-md-7">
        <b><label>Imagen:</label></b>
        </div>

        
            <div class="col-md-5">
                 <input type="file" name="imagen_f" class="form-control">
            </div>


            <div class="form-group col-md-7">
        <b><label>Fecha Hoy:</label></b>
        </div>

            <div class="form-group col-md-5">
            <input type="date" id="fecha_f" name="fecha_f" class="form-control" readonly value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d") ?>">
        <p>*Este campo es automático*</p>
        </div>




    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Crear" class="btn btn-success">
            <a href="<?php echo getUrl("Foro", "Foro", "Consult"); ?>"><button type="button" class="btn btn-dark">Volver</button></a>

        </div>

    </div>

</form>