    <?php
    $nom = "Mateusz";
    // $ecole = "CEFii";
    define("ECOLE", "CEFii");
    $anne_en_cours = 2021;
    // $anne_naissance = 1988;
    define("ANNE_NAISSANCE", 1988);
    $age =  $anne_en_cours - ANNE_NAISSANCE;

    echo "Je m'appelle" . $nom . ".<br />";
    echo "Je suis en formation au " . ECOLE . "<br />";
    echo "J'ai " . $age . " ans <br />";

    ?>