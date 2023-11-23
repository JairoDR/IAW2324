<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué navegador utilizas?</title>
</head>
<body>
        <?php
        // Para saber el navegador
        $navegador = $_SERVER['HTTP_USER_AGENT'];
        echo "El navegador que estás utilizando es: $navegador";
        ?>
</body>
</html>