<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores cadena</title>
</head>
<body>
    <?php
            // Definir variables de tipo cadena
            $parte1 = "Hola, ";
            $parte2 = "mundo!";
            $nombre = "Paco";

            // Concatenación
            $concatenacion = $parte1 . $parte2;
            echo "Concatenación: $concatenacion\n";

            // Concatenación con asignación
            $parte1 .= $nombre;
            echo "Concatenación con asignación: $parte1\n";

            // Longitud de la cadena
            $longitud = strlen($concatenacion);
            echo "Longitud de la cadena: $longitud\n";

            // Mayúsculas
            $mayusculas = strtoupper($concatenacion);
            echo "Mayúsculas: $mayusculas\n";

            // Minúsculas
            $minusculas = strtolower($concatenacion);
            echo "Minúsculas: $minusculas\n";
    ?>
</body>
</html>