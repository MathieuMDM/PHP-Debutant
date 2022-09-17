<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement formulaire</title>
</head>

<body>
    <table>
        <tr>
            Formulaire de contact:
            <form action="mode.php" method="post">
                <p><label>Nom</label> <input type="text" name="nom"></p>
                <p><label>Prenom</label> <input type="text" name="preNom"></p>
                <p><label>Code postal</label> <input type="text" name="codePostal"></p>
                <p><label>Numero de telephone</label> <input type="text" name="numeroDeTelephone"></p>
                <p><label>Message</label> <input type="text" name="message"></p>
                <input type="submit" value="vérifier" />
            </form>
        </tr>
    </table>
</body>

</html>