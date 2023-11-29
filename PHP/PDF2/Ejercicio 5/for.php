<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
<h1>Números del 1 al 10 con For</h1>
    <table border="1">
        <tr>
            <?php
            for ($numero = 1; $numero <= 10; $numero++) {
                echo "<td>$numero</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>