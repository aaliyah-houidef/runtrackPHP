<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="../job04/index.php" method="post">
        Jour : <input type="text" name="jour"><br>
        Mois : <input type="text" name="mois"><br>
        Année : <input type="text" name="année"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_POST)) {
        $nb_args = count($_POST);
        echo "Nombre d'arguments : $nb_args";
    }
?>

</body>
</html>
