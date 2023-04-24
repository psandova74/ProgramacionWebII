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
            <li>	<a href="ejercicio19.php">Ejercicio 19</a>		</li>
            <li>	<a href="ejercicio20.php">Ejercicio 20</a>		</li>
        </ul>
    </nav>
</header>

<body>
<h3>Ejercicio 16</h3>
<section class="ejercicio-contenedor">

   <h1>Piedra Papel o Tijera</h1>
    <form action="ejercicio16.php" method="post">
        <label>Nombre Jugador: </label> <input type="text" name="jugador1" >
        <label>Ingrese jugada: </label> <input type="text" name="jugada1" > <br><br>
        <input type="submit" value="Enviar">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once("figuras/FigurasFactory.php");
        include_once("funciones.php");
        $figurasFactory = new FigurasFactory();
        $jugador1 = $_POST["jugador1"];
        $jugada1 = $_POST["jugada1"];
        $jugador2 = "Maquina";
        $jugada2 = piedrapapeltijera();
        echo "<br>Jugaste: " . $jugada1;
        echo "<br>La Maquina: " . $jugada2;
        $j1 = $figurasFactory->create($jugada1 , $jugador1);
        $j2 = $figurasFactory->create($jugada2 , $jugador2);
        echo "<br>Ganador: " . $j1->jugar($j2);
    }

    ?>
</section>

 </body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>

