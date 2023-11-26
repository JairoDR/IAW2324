<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoticonos</title>
</head>
<body>
        <?php
        // Generar un número aleatorio
        $numero_emoticono = rand(128512, 128586);

        // Usando la codificación Unicode
        echo '<p style="font-size: 2em;">&#' . $numero_emoticono . ';</p>';
        ?>
</body>
</html>