<nav class="navbar navbar-expand-md navbar-dark bg-dark text-white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand ml-5" href="#">Foros</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <div class="mr-5">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
      </form>
    </div>
  </div>
</nav>

<div class="row mt-2">

  <div class="col-12 colxl-9">
    <h2 class="h4 bg-info mb-0 p-4 rounded-top">
      <a href="#" class="text-white">Nuestros Foros</a>

    </h2>

  </div>
</div>



<?php

$contador = 1;

foreach ($foros as $for) {

  if ($contador == 1) {

    echo "<div class='row'>";
  }
  

  echo "<div class='col-md-4'>";
    echo "<div class='card mt-3'>";
      echo "<img class='card-img-top' src='" . $for['imagen_f'] . "' alt='Card image cap' width='1160'>";
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


?>