<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria de Sevilla</title>
</head>
<body>
<?php
    // Hay que meter un valor con la fecha de la feria y otro en blanco para que pille el día al que estamos y luego sacar la diferencia
    $fechaInicio = new DateTime('2023-04-23');

    $fechaActual = new DateTime();

    // Fórmula que calcula la diferencia en días, mirar otros formatos
    $diferencia = $fechaActual->diff($fechaInicio)->format('%a');

    echo 'Faltan ' . $diferencia . ' días para el inicio de la Feria de abril de 2023.';
    ?>

</body>
</html>