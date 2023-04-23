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
<h3>Ejercicio 13</h3>
<section class="ejercicio-contenedor">
    <h1>Menú del día</h1>
    <form action="ejercicio13.php" method="post">
        <p>Seleccione los pasos del menú que desea:</p>
        <input type="checkbox" name="entrada" value="Snacks">Entrada<br>
        <input type="checkbox" name="plato_principal" value="Milanesa">Plato principal<br>
        <input type="checkbox" name="acompanamiento" value="Papas fritas">Acompañamiento<br>
        <input type="checkbox" name="postre" value="Helado">Postre<br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <h4>Seleccion realizada:</h4>
    <?php
    // comprobar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // leer el archivo menu.ini
        $menu = parse_ini_file("menu.ini");

        // comprobar qué pasos del menú se seleccionaron y mostrarlos
        if(isset($_POST['entrada'])){
            echo "<p>".$menu['entrada']."</p>";
        }
        if(isset($_POST['plato_principal'])){
            echo "<p>".$menu['plato_principal']."</p>";
        }
        if(isset($_POST['acompanamiento'])){
            echo "<p>".$menu['acompanamiento']."</p>";
        }
        if(isset($_POST['postre'])){
            echo "<p>".$menu['postre']."</p>";
        }
    }
    ?>


</section>




</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>

