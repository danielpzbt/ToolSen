<section class="forum" style="background-color:#e6e6e6; padding:10px ">

    <?php

    foreach ($foros as $for) {

    ?>



        <center>
            <div class="col-md-8">


                <div class="jumbotron" style="background-color:#fff;">

                    <h1 class="display-4" style="text-align: center;"><?php echo $for['titulo_f'] ?> </h1>

                    <h3 style="color:#79C8D4; text-align: center;"><?php echo $for['desc_tema'] ?> </h3>
                    <hr>
                    <p style="text-align: justify;"><?php echo $for['descripcion_f'] ?></p>

                    <hr>
                    <br>
                    <p style="text-align: left;"><?php echo "Autor: " . $for['usu_nombres'] ?></p>

                    <span class="span-button" id="mostrar">Comentar</span>


                </div>

                <div class="formforo">
                    <div class="col-md-13">
                        <p style="text-align: left;">Envía tu comentario aquí.</p>
                        <textarea class="form-control" name="" id="text" cols="40" rows="8"></textarea>
                        <button class="btn btn-success mt-2 botonsito" type="submit">Responder</button>
                    </div>
                    <p style="text-align:left;">Tu comentario es importante para nosotros, registra el tuyo :). </p>
                </div>

            </div>
        </center>




    <?php
    }
    ?>

</section>