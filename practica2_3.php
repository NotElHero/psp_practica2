<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
    $nCartas = 2;

    //Jugador 1
    echo "Jugador 1";
    echo "<br>";
    sacarCartas(2);
    echo "<br>";

    //Jugador 2
    echo "Jugador 2";
    echo "<br>";
    sacarCartas(2);
    

    function sacarCartas($nCartas)
    {
        for ($i=0; $i < $nCartas; $i++) { 
            switch (rand(1, 4)) {
                case 1:
                    $baraja = 'Bastos';
                    break;
                case 2:
                    $baraja = 'Copas';
                    break;
                case 3:
                    $baraja = 'Oros';
                    break;
                case 4:
                    $baraja = 'Espadas';
                    break;
                }
            echo "<img src='baraja/", strval($baraja), "/", rand(1, 12), ".jpg'>";
        }
    }
    ?>
</body>
</html>