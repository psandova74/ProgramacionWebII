<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Trabajos Practicos</title>
    <link rel="stylesheet" href="../css/stylePractico.css">
</head>
<header>
    <h2>Patricia Lorena Sandoval</h2>
    <nav>
        <ul>
            <li>	<a href="../index.php">Ejercicio 8</a>
            <li>	<a href="ejercicio9.php">Ejercicio 9</a>		</li>
            <li>	<a href="ejercicio10.php">Ejercicio 10</a>		</li>
            <li>	<a href="ejercicio11.php">Ejercicio 11</a>		</li>
            <li>	<a href="ejercicio12.php">Ejercicio 12</a>		</li>
            <li>	<a href="ejercicio13.php">Ejercicio 13</a>		</li>
            <li>	<a href="ejercicio14.php">Ejercicio 14</a>		</li>
            <li>	<a href="ejercicio15.php">Ejercicio 15</a>		</li>
            <li>	<a href="ejercicio16.php">Ejercicio 16</a>		</li>
            <li>	<a href="ejercicio17.php">Ejercicio 17</a>		</li>
            <li>	<a href="ejercicio18.php">Ejercicio 18</a>		</li>
        </ul>
    </nav>
</header>

<body>
<h3>Ejercicio 18</h3>
<section class="ejercicio-contenedor">
    <h1>Packman</h1>
    <?php
    include_once("packman/Packman.php");
    include_once('packman/Partida.php');
    include_once('packman/FantasmaComestible.php');
    include_once('packman/Pildora.php');
    include_once('packman/Espina.php');
    include_once('packman/Fantasma.php');

    try {
        $puntaje = 0;

        $partida = new Partida($puntaje);
        $packman = new Packman($partida);
        $pildora = new Pildora();
        $espina = new Espina();
        $fantasma = new Fantasma();

        $fantasmaComestible = new FantasmaComestible();

        $packman->chocaContra($fantasmaComestible);
        $partida->mostrarPuntaje();

        $packman->chocaContra($fantasmaComestible);
        $packman->chocaContra($fantasmaComestible);
        $partida->mostrarPuntaje();

        $packman->chocaContra($pildora);
        $partida->mostrarPuntaje();

        $packman->chocaContra($pildora);
        $packman->chocaContra($pildora);
        $partida->mostrarPuntaje();

        $packman->chocaContra($espina);
        $packman->chocaContra($espina);
        $partida->mostrarPuntaje();


        $packman->chocaContra($fantasma);
        $partida->mostrarPuntaje();

        $packman->chocaContra($fantasma);
        $packman->chocaContra($fantasma);
        $partida->mostrarPuntaje();

    } catch (FinDePartida $e) {
        echo  $e->getMessage();
    }


    ?>

</section>




</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>
