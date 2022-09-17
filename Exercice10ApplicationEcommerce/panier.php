<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application e-commerce</title>
</head>

<body>
    <div>
        <selection id="produits">
            <p>Disque dur 500 gb = 100 € <a href="modifierPanier.php?DD500go=1"><button type="button">Ajouter au
                        panier</button></a> <a href="modifierPanier.php?SDD500go=1">
                    <button>Supprimer produit</button>
                </a></p>

            <p>Moniteur d'ordinateur = 200 € <a href="modifierPanier.php?MDO=1"><button type="button">Ajouter au
                        panier</button></a> <a href="modifierPanier.php?SMDO=1">
                    <button>Supprimer produit</button>
                </a></p>

            <p>Souris d'ordinateur = 30 € <a href="modifierPanier.php?SDO=1"><button type="button">Ajouter au
                        panier</button></a> <a href="modifierPanier.php?SSDO=1">
                    <button>Supprimer produit</button>
                </a></p>

            <p>Clavier pour ordinateur = 40 € <a href="modifierPanier.php?CPO=1"><button type="button">Ajouter au
                        panier</button></a> <a href="modifierPanier.php?SCPO=1">
                    <button>Supprimer produit</button>
                </a></p>
        </selection>
    </div>
    <section id="mid">
        <fieldset>
            <legend>Aperçu de la commande :</legend>
            <div>
                <?php
echo "Nombre de disques commandés = " . $_SESSION['DD500go'] . " il vous coûtera = " . $_SESSION['DD500go'] * 100 . " € <br>";
echo "Nombre de moniteurs commandés = " . $_SESSION['MDO'] . " il vous coûtera = " . $_SESSION['MDO'] * 200 . " € <br>";
echo "Nombre de souris commandées = " . $_SESSION['SDO'] . " il vous coûtera = " . $_SESSION['SDO'] * 30 . " € <br>";
echo "Nombre de claviers commandés = " . $_SESSION['CPO'] . " il vous coûtera = " . $_SESSION['CPO'] * 40 . " € <br>" . "<br>";
echo "Le nombre de pièces est = " . $_SESSION['all'] . "<br>";
echo "Tout vous coûtera = " . ($_SESSION['DD500go'] * 100) + ($_SESSION['MDO'] * 200) + ($_SESSION['SDO'] * 30) + ($_SESSION['CPO'] * 40) . " € <br>";
echo "Tout vous coûtera (avec 20% de taxe)  = " . ($_SESSION['DD500go'] * 100) + ($_SESSION['MDO'] * 200) + ($_SESSION['SDO'] * 30) + ($_SESSION['CPO'] * 40) + (($_SESSION['DD500go'] * 100) + ($_SESSION['MDO'] * 200) + ($_SESSION['SDO'] * 30) + ($_SESSION['CPO'] * 40)) * 0.2 . " € <br>";
?>
            </div>
        </fieldset>
    </section>
    <a href="modifierPanier.php?valider=1">
        <button>Ajouter au panier</button>
    </a>
    <a href="modifierPanier.php?zero=1">
        <button>Vider le panier</button>
    </a>

    <section id="down">
        <fieldset>
            <legend>Votre panier</legend>
            <?php echo $_SESSION['nombreArticlesPanier']; ?>
        </fieldset>
        <a href="modifierPanier.php?zero=1">
            <button>Nouveaux achats</button>
        </a>
    </section>
</body>

</html>