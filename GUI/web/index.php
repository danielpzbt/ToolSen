<?php

    include_once '../lib/helpers.php';

    include_once '../view/partials/head.php';

    echo "<body>";
        echo "<div class='hero_area'>";

            include_once '../view/partials/header.php';

            include_once "../view/partials/slider.php";

        echo "</div>";

        
        if(isset($_GET['modulo']) && $_GET['modulo']=="Foro"){
        
            echo "<br>";
            resolve();
        }

        include_once '../view/partials/special.php';

        include_once '../view/partials/about.php';

        include_once '../view/partials/program.php';

        include_once '../view/partials/login.php';

        include_once '../view/partials/new.php';

        include_once '../view/partials/opinion.php';

        if (isset($_GET['modulo']) && $_GET['modulo']!="Foro") {
            resolve();
        }else{
            include_once '../view/partials/pqrsf.php';
            include_once '../view/partials/foro.php';

        }   

        echo "<br>";
        include_once '../view/partials/footer.php';
        include_once '../view/partials/script.php';

    echo "</body>";

    echo "</html>";

?>
