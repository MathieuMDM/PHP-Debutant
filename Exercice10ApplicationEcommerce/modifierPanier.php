<?php
session_start();

$_SESSION['nombreArticlesPanier'] = "Vous n'avez rien dans votre panier... ";

if (isset($_GET['DD500go']) && ($_GET['DD500go'] == 1)) {
    $_SESSION['DD500go']++;
    // $_SESSION['nombreArticlesPanier'] = "Le nombre de disques est = " . $_SESSION['DD500go'] . "<br>";
}
if (isset($_GET['SDD500go']) && ($_GET['SDD500go'] == 1) && $_SESSION['DD500go'] > 0) {
    $_SESSION['DD500go']--;
}

if (isset($_GET['MDO']) && ($_GET['MDO'] == 1)) {
    $_SESSION['MDO']++;
    // $_SESSION['nombreArticlesPanier'] = "le nombre de moniteurs est = " . $_SESSION['MDO'] . "<br>";
}
if (isset($_GET['SMDO']) && ($_GET['SMDO'] == 1) && $_SESSION['MDO'] > 0) {
    $_SESSION['MDO']--;
}

if (isset($_GET['SDO']) && ($_GET['SDO'] == 1)) {
    $_SESSION['SDO']++;
}
if (isset($_GET['SSDO']) && ($_GET['SSDO'] == 1) && $_SESSION['SDO'] > 0) {
    $_SESSION['SDO']--;
}

if (isset($_GET['CPO']) && ($_GET['CPO'] == 1)) {
    $_SESSION['CPO']++;
}

if (isset($_GET['SCPO']) && ($_GET['SCPO'] == 1) && $_SESSION['CPO'] > 0) {
    $_SESSION['CPO']--;
}

if (isset($_GET['zero']) && ($_GET['zero'] == 1)) {
    $_SESSION['DD500go'] = 0;
    $_SESSION['MDO'] = 0;
    $_SESSION['SDO'] = 0;
    $_SESSION['CPO'] = 0;
}
$_SESSION['all'] = $_SESSION['DD500go'] + $_SESSION['MDO'] + $_SESSION['SDO'] + $_SESSION['CPO'];

if (isset($_GET['valider']) && ($_GET['valider'] == 1)) {
    $_SESSION['nombreArticlesPanier'] = "Vous avez commandé le nombre d'articles suivant = " . $_SESSION['all'] . "<br>" . "Le nombre de disques est = " . $_SESSION['DD500go'] . "<br>" . "Le nombre de moniteurs est = " . $_SESSION['MDO'] . "<br>" . "Le nombre de souris est = " . $_SESSION['SDO'] . "<br>" . "Le nombre de claviers est = " . $_SESSION['CPO'] . "<br>";
}

header("Location:panier.php");