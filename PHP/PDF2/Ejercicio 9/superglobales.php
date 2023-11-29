<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
</head>
<body>
    <?php
        // Obtener la dirección IP
        $ip = $_SERVER['REMOTE_ADDR'];

        // Obtener el navegador
        $navegador = $_SERVER['HTTP_USER_AGENT'];

        // Obtener la página previa que ha referido al usuario (si está disponible)
        //$paginaprevia = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible';

        echo "<p>Dirección IP: $ip</p>";
        echo "<p>Navegador: $navegador</p>";
        echo "<p>Página previa: $paginaprevia</p>";
    ?>
</body>
</html>