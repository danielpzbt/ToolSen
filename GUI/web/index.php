
<?php

include_once '../lib/helpers.php';
include_once '../view/partials/head.php';
include_once '../view/partials/navbar.php';


echo "<body>";

echo "<div class='container'>";


if (isset($_GET['modulo'])) {

    resolve();
} else {

    include_once '../view/partials/carousel.php';
}



echo "</div>";

include_once '../view/partials/modal.php';
include_once '../view/partials/footer.php';



?>