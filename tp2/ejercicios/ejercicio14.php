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
<h3>Ejercicio 14</h3>
<section class="ejercicio-contenedor-grande">

    <h1>Matriz cuadrada</h1>
    <form action="ejercicio14.php" method="post">
        <p>Ingrese la dimensión de la matriz cuadrada:</p>
        <input type="text" name="dimension">
        <input type="submit" value="Crear matriz">
    </form>

    <?php
    if(isset($_POST['dimension'])){
        $dimension = $_POST["dimension"];

        // crear la matriz
        $matriz = array();
        for ($i=0; $i<$dimension; $i++) {
            $matriz[$i] = array();
            for ($j=0; $j<$dimension; $j++) {
                $matriz[$i][$j] = $i*$dimension+$j+1;
            }
        }

        // mostrar la matriz
        echo "<h4>Matriz:</h4>";
        echo "<table border='1'>";
        for ($i=0; $i<$dimension; $i++) {
            echo "<tr>";
            for ($j=0; $j<$dimension; $j++) {
                echo "<td>".$matriz[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // recorrer la matriz y mostrar la diagonal principal
        echo "<h4>Diagonal principal:</h4>";
        for ($i=0; $i<$dimension; $i++) {
            echo $matriz[$i][$i].", ";
        }

        // recorrer la matriz y mostrar la diagonal secundaria
        echo "<h4>Diagonal secundaria:</h4>";
        for ($i=0; $i<$dimension; $i++) {
            echo $matriz[$i][$dimension-$i-1].", ";
        }

        // recorrer la matriz y sumar todos los valores
        $suma = 0;
        for ($i=0; $i<$dimension; $i++) {
            for ($j=0; $j<$dimension; $j++) {
                $suma += $matriz[$i][$j];
            }
        }
        echo "<h4>Suma de todos los valores:</h4>";
        echo $suma;

    }
    ?>
</section>

</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>

