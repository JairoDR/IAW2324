<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h1>Números del 1 al 10 con While</h1>
    <table border="1">
        <tr>
            <th>Número</th>
        </tr>

        <?php
        // Definir el número con el primer valor, no dejar en blanco
        $numero = 1;

        while ($numero <= 10) {
            echo "<tr><td>$numero</td></tr>";
            $numero++;
        }
        ?>
    </table>
</body>
</html>