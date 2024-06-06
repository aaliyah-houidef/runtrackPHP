<?php

session_start();
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    $_SESSION['nbVisites']++;
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
    <h1>Nombres de visites:<?php echo $_SESSION['nbVisites'];?></h1>
    <form method="post"><button type="submit" name="reset">RESET</button></form>
</body>
</html>