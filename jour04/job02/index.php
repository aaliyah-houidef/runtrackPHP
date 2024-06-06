<?php
if (isset($_POST['reset'])) {
    setcookie('nbVisites', 0, time() + 365*24*3600);
    $_COOKIE['nbVisites'] = 0; 
} else {
    if (!isset($_COOKIE['nbVisites'])) {
        setcookie('nbVisites', 1, time() + 365*24*3600);
        $_COOKIE['nbVisites'] = 1;
    } else {
        $nbVisites = $_COOKIE['nbVisites'] + 1;
        setcookie('nbVisites', $nbVisites, time() + 365*24*3600);
        $_COOKIE['nbVisites'] = $nbVisites; 
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $_COOKIE['nbVisites']; ?></h1>
    <form method="post">
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>
