<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día de la semana</title>
</head>
<body>
    <?php
    $diasemana = date('N');

    $mensaje = '';

    switch ($diasemana) {
        case 1:
            $mensaje = 'Es lunes';
            break;
        case 2:
            $mensaje = 'Es martes';
            break;
        case 3:
            $mensaje = 'Es miércoles';
            break;
        case 4:
            $mensaje = 'Es jueves';
            break;
        case 5:
            $mensaje = 'Es viernes';
            break;
        case 6:
            $mensaje = 'Es sábado';
            break;
        case 7:
            $mensaje = 'Es domingo';
            break;
    }
    echo $mensaje;
    ?>

</body>
</html>