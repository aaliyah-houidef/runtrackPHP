<?php 

session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        if ($prenom !== '') {
            $_SESSION['prenoms'][] = $prenom;
        }
    }
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des prénoms:</h1>
    <ul>
        <?php
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        }
        ?>
    </ul>

    <h2>Ajouter un prénom:</h2>
    <form method="post">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Réinitialiser la liste:</h2>
    <form method="post">
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>