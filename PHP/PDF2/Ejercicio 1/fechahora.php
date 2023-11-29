<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y hora española</title>
</head>
<body>
<?php
    date_default_timezone_set('Europe/Madrid');

    // Así se cambia a español la fecha
    setlocale(LC_TIME, 'es_ES');

    // Esto da la fecha y la hora, cuidado con el formato
    $fechaHora = strftime('%A, %d de %B de %Y - %H:%M:%S');

    echo 'Fecha y Hora: ' . $fechaHora;
    ?>

</body>
</html>