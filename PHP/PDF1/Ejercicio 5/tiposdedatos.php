<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
        <?php
        // Definir las variables
        $entero = 7;
        $real = 3.14;
        $cadena = "Hola mundo";
        $booleano = true;
        $array = array(1, 2, 3, 4, 5);

        // Mostrar los resultados, seguir estructura y solo cambiar el valor interno
        echo "Variable entera:\n";
        var_dump($entero);

        echo "\nVariable real:\n";
        var_dump($real);

        echo "\nVariable cadena:\n";
        var_dump($cadena);

        echo "\nVariable booleana:\n";
        var_dump($booleano);

        echo "\nVariable array:\n";
        var_dump($array);
        ?>
</body>
</html>