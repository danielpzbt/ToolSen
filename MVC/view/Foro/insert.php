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
        
    <input type="hidden" name="cod_foro">

        <div class="form-group col-md-7">
        <b><label>Título del Foro:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="text" name="titulo_f" class="form-control" placeholder="Título Foro" maxlength="31" required>
            <b><p>*máximo 31 caracteres*</p></b>
        </div>


        <div class="form-group col-md-7" >
        <b><label>Seleccione el Tema del Foro:</label></b>
        </div>
        <div class="form-group col-md-5" >
            <select class="form-control" name="t_tema_t_cod_tema" id="" required>
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
            <textarea name="descripcion_f"  id="alertica" cols="127" class="form-control" rows="10" maxlength="1800" required></textarea>
            <b><p>*Si desea realizar un salto de renglón imprima la etiqueta* <ㅤbrㅤ></p></b>
        </div>



        <div class="form-group col-md-7">
        <b><label>Fecha Inicio:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="fecha_ini_f" class="form-control" required value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">
        </div>

        <div class="form-group col-md-7">
        <b><label>Fecha Final:</label></b>
        </div>

        <div class="form-group col-md-5">
            <input type="date" id="fecha" name="fecha_fin_f" class="form-control" required value="<?php echo "" ?>" min="<?php echo date("Y-m-d") ?>" max="2040-12-31">


        </div>


        <div class="form-group col-md-7">
        <b><label>Imagen:</label></b>
        </div>

        
            <div class="col-md-5">
                 <input type="file" id="fil" name="imagen_f" class="form-control" required>
                 <b><p>*extensión jpg únicamente*</p></b>
            </div>



            <div class="form-group col-md-7">
        <b><label>Fecha Hoy:</label></b>
        </div>
        

            <div class="form-group col-md-5">
            <input type="date" id="fecha_f" name="fecha_f" class="form-control" readonly value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d") ?>">
        <b><p>*Este campo es automático*</p></b>
        </div>




    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Crear" class="btn btn-success">
            <a href="<?php echo getUrl("Foro", "Foro", "Consult"); ?>"><button type="button" class="btn btn-dark">Volver</button></a>

        </div>

    </div>

</form>
