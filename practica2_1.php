<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio2_1</title>
</head>
<body>
    <?php
    $var = rand(1, 6);
    $var1 = rand(1, 6);
    $var2 = rand(1, 6);
    $res = $var1 + $var2;

    switch ($var) {
        case 1:
            echo "<img src='dados/uno.png'>";
            break;
        case 2:
            echo "<img src='dados/dos.png'>";
            break;
        case 3:
            echo "<img src='dados/tres.png'>";
            break;
        case 4:
            echo "<img src='dados/cuatro.png'>";
            break;
        case 5:
            echo "<img src='dados/cinco.png'>";
            break;
        case 6:
            echo "<img src='dados/seis.png'>";
            break;                
    }
    echo "<br>";
    echo "La tirada ha sido ", $res, " (", $var1, " + ", $var2, ")";
    echo "<br>";
    
    if ($res >= 10) {
        echo "buena";
    } else if ($res >= 5 && $res < 10) {
        echo "normal";
    } else if ($res < 5) {
        echo "mala";
    }
    if ($var1 == $var2) {
        echo " y doble";
    }
    ?>
</body>
</html>