<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="post">
        Jour : <input type="text" name="jour"><br>
        Mois : <input type="text" name="mois"><br>
        Année : <input type="text" name="année"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
        if (isset($_POST['jour'])) {
            echo "Jour : " . $_POST['jour'] . "<br>";
        }
        if (isset($_POST['mois'])) {
            echo "Mois : " . $_POST['mois'] . "<br>";
        }
        if (isset($_POST['année'])) {
            echo "Année : " . $_POST['année'] . "<br>";
        }
    ?>
</body>
</html>
