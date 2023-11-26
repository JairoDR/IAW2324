<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        // Generar colores RGB aleatorios
        $colorR = rand(0, 255);
        $colorG = rand(0, 255);
        $colorB = rand(0, 255);

        echo '<div style="width: 300px; height: 300px; background-color: rgb(' . $colorR . ',' . $colorG . ',' . $colorB . ');"></div>';
        ?>
</body>
</html>