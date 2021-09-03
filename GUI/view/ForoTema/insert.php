<div class="jumbotron mt-4" style="background-image: url('http://comunidad.iebschool.com/iebs/files/2015/11/foros-en-tu-estrategia-de-marketing.png')">
    <center>
       <h3 class="display-4">Crea Tu Tema Para El Foro</h3>
    </center>
    <center>
    <h4>Ingresa el Tema que desees</h4>
    </center>
</div>
<form action="<?php echo getUrl("ForoTema", "ForoTema", "postInsert"); ?>" method="post">

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Información del tema</li>
        </ol>
    </nav>
    
    <div class="row">

    

        <div class="form-group col-md-4">
            <label>Tema Foro</label>
            <input type="text" name="desc_tema" class="form-control" placeholder="Ingresa el tema" required>

        </div>

        <div class="form-group col-md-4">
            <label>Fecha hoy</label>
            <input type="date" id="fecha_t" name="fecha_t" class="form-control" readonly value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d") ?>">
            <p>*Este campo es automático*</p>

        </div>

    </div>


    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Registrar" class="btn btn-success">
            <a href="<?php echo getUrl("ForoTema", "ForoTema", "Consult"); ?>"><button type="button" class="btn btn-dark">Volver</button></a>

        </div>

    </div>

</form>