<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="../job02/index.php" method="get">
        Jour : <input type="text" name="jour"><br>
        Mois : <input type="text" name="mois"><br>
        Année : <input type="text" name="année"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
        if (isset($_GET)) {
            $nb_params = count($_GET);
            echo "Nombre d'arguments dans l'URL : $nb_params";
        }
    ?>
</body>
</html>
