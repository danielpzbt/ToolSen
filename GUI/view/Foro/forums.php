<section class="forum" style="background-color:#e6e6e6; padding:10px ">

    <?php

    foreach ($foros as $for) {

    ?>


        <center><div class="col-md-8"><center>

            <div class="jumbotron" style="background-color:#fff;">
                <center>
                    <h1 class="display-4"><?php echo $for['titulo_f'] ?> </h1>
                </center>

                <center><h3 style="color:#79C8D4;"><?php echo $for['desc_tema']?> </h3></center>
                <hr>
                <p style="text-align: justify;"><?php echo $for['descripcion_f']?></p>

                <hr>
                <br>
                <p style="text-align: left;"><?php echo "Autor: ". $for['usu_nombres']?></p>
            </div>


        </div>

    <?php
    }
    ?>

</section>