<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (!empty($_POST)) {
                foreach ($_POST as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($key) . "</td>";
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Aucune donnée reçue.</td></tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>
