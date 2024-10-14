<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    $var1 = rand(1, 6);
    $var2 = rand(1, 6);
    $var3 = rand(1, 6);
    $var4 = rand(1, 6);

    echo "jugador 1";
    echo "<br>";
    switch ($var1) {
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

    switch ($var2) {
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
    echo "jugador 2";
    echo "<br>";
    switch ($var3) {
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

    switch ($var4) {
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

    $jugador1 = $var1 + $var2;
    $jugador2 = $var3 + $var4;

    if ($jugador1 > $jugador2) {
        echo "<br>";
        echo "El jugador 1 ha ganado con ", $var1 + $var2, " puntos";
    } else if ($jugador2 > $jugador1) {
        echo "<br>";
        echo "El jugador 2 ha ganado con ", $var3 + $var4, " puntos";
    } else {
        echo "<br>";
        echo "Los dos jugadores han empatado";
    }
    

    ?>
</body>

</html>