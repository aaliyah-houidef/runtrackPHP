<?php

$number = 213;
$foo = true;
$text = "Ceci est une chaîne simple";
$vr = true;
$decimal = 2.13; 


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype($number); ?></td>
            <td>$number</td>
            <td><?php echo $number; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($decimal); ?></td>
            <td>$decimal</td>
            <td><?php echo $decimal; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($text); ?></td>
            <td>$text</td>
            <td><?php echo $text; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($vr); ?></td>
            <td>$vr</td>
            <td><?php echo $vr ? 'true' : 'false'; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
