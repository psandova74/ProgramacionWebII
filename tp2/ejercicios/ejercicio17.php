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
<h3>Ejercicio 17</h3>
<section class="ejercicio-contenedor-grande">

    <h1>Calculadora</h1>


    <?php
    include_once("calculadora/Operando.php");
    include_once("calculadora/Sumar.php");
    include_once("calculadora/Restar.php");
    include_once("calculadora/Multiplicar.php");

    echo "<p> \$resta = ( new Restar(new Operando(5), new Operando(3))); </p>";
    $resta= ( new Restar(new Operando(5), new Operando(3)));
    echo "Mostrar ecuacion: " . $resta->mostrarEcuacion();
    echo "<br>Resultado: " . $resta->resolverEcuacion();

    echo "<p> \$suma = (new Sumar(new Operando(3), new Operando(4))); </p>";
    $suma = (new Sumar(new Operando(3), new Operando(4)));
    echo "Mostrar ecuacion: " . $suma->mostrarEcuacion();
    echo "<br>Resultado: " . $suma->resolverEcuacion();

    echo "<p> \$resultado = (new Sumar(<br>new Restar( new Operando(5), new Operando(3)) ,<br>new Sumar( new Operando(3), new Operando(4))<br>);</p>";
    $sumaoperaciones= (new Sumar(new Restar( new Operando(5), new Operando(3)) ,new Sumar( new Operando(3), new Operando(4))));
    echo "Mostrar ecuacion: " . $sumaoperaciones->mostrarEcuacion();
    echo "<br>Resultado: " . $sumaoperaciones->resolverEcuacion();

    echo "<p> \$resultado = (new Multiplicar(<br>
            new Sumar(<br>new Restar(new Operando(5), new Operando(3)),<br>
                new Sumar(new Operando(3), new Operando(4))),<br>
            new Operando(2)));</p>";
    $ecuacion = (new Multiplicar(
        new Sumar(new Restar(new Operando(5), new Operando(3)),
        new Sumar(new Operando(3), new Operando(4))            ),
        new Operando(2)));
        echo "Mostrar ecuacion: " . $ecuacion->mostrarEcuacion();
        echo "<br>Resultado: " . $ecuacion->resolverEcuacion();
    ?>

</section>




</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>

