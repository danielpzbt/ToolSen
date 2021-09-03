<section class="course_section_foro layout_padding-bottom">
  <br>
  <br>

<div class="container"> <!-- Comienza el container -->

<div class="heading_container">
  <h3>
   Nuestros Foros
  </h3>
  <p>
     Conoce todos los Foros que tenemos disponibles en nuestro Sistema Web,
    <br>
    que pueden ser de tu interés.
  </p>
</div>



<?php

$contador = 1;

foreach ($foros as $for) {

  if ($contador == 1) {

    echo "<div class='row'>";
  }

  echo "<div class='col-md-4'>";
    echo "<div class='card mt-3'>";
      echo "<img class='card-img-top' src='" . $for['imagen_f'] . "' alt='Card image cap'>";
      echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $for['titulo_f'] . "</h5>";
        echo "<p class='card-text'>Tema: " . $for['desc_tema'] . "</p>";
        echo "<p> Autor:  ".$for['usu_nombres']." </p>";
        echo "<a href='" . "#" . '.php' . "' class='btn btn-primary'>Visitar</a>";
      echo "</div>";
    echo "</div>";
  echo "</div>";


  $contador++;

  if ($contador == 4) {

    echo "</div>";

    $contador = 1;
    
  }

  
}

echo "</div>"; //Termina el container
echo "</section>";



?>