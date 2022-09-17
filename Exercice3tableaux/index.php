    <?php
    // $tablen = array("Classique", "Jazz", "Pop", "Rock", "Independant");
    $table[] = "Classique";
    $table[] = "Jazz";
    $table[] = "Pop";
    $table[] = "Rock";
    $table[] = "Independant";
    // $table = array("Mozart", "Amstrong", "Bowie", "Beatles", "Les Tets Raides");

    echo $table[0] . "<br />";
    echo $table[1] . "<br />";
    echo $table[2] . "<br />";
    echo $table[3] . "<br />";
    echo $table[4] . "<br />";

    $tablea['auteur1'] = 'Mozart';
    $tablea['auteur2'] = 'Amstrong';
    $tablea['auteur3'] = 'Bowie';
    $tablea['auteur4'] = 'Beatles';
    $tablea['auteur5'] = 'Les Têtes Raides';

    echo $tablea['auteur1'] . "<br />";
    echo $tablea['auteur2'] . "<br />";
    echo $tablea['auteur3'] . "<br />";
    echo $tablea['auteur4'] . "<br />";
    echo $tablea['auteur5'] . "<br />";

    $table_tablea['Classique']['auteur1'] = "Mozart";
    $table_tablea['Classique']['auteur2'] = "Bach";
    $table_tablea['Classique']['auteur3'] = "Haendel";
    $table_tablea['Jazz']['auteur1'] = "Amstrong";
    $table_tablea['Pop']['auteur1'] = "David Bowie";
    $table_tablea['Pop']['auteur2'] = "Iggy Pop";
    $table_tablea['Rock']['auteur1'] = "Beatles";

    echo "Voici les auteurs de musique pop: " . $table_tablea['Pop']['auteur1'] . ", " .
        $table_tablea['Pop']['auteur2'];

    ?>