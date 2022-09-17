<?php
$code_postal = $_POST['codePostal'];
$une = false;
$deux = false;
if (strlen($code_postal) == 5 && is_numeric($code_postal)) {
    $une = true;
} else {
    echo "Le code postal doit comporter cinq caractères et être un nombre <br>";
}

$nom = $_POST['nom'];
$prenom = $_POST['preNom'];

$numero_telephone = $_POST['numeroDeTelephone'];

$numeros = explode('.', $numero_telephone);

if (strlen($numero_telephone) == 10 && is_numeric($numero_telephone)) {
    $deux = true;
} elseif (count($numeros) == 5) {
    $numero_telephone = $numeros[0] . $numeros[1] . $numeros[2] . $numeros[3] . $numeros[4];
    $deux = true;
} else {
    echo "Numéro de téléphone doit contenir dix caractères et être un nombre <br>";
}

if ($une && $deux) {
    echo "Le message a été envoyé avec succès";
    $to = "mateusz.pawlicha@gmail.com";
    $text = "info";
    $message = $_POST['message'];
    $body = $nom . "\n" . $prenom . "\n" . $code_postal . "\n" . $numero_telephone . "\n" . $message;
    mail($to, $text, $body);
} else {
    echo "";
}