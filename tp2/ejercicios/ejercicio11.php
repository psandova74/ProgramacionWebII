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
<h3>Ejercicio 11</h3>
<section class="ejercicio-contenedor">
    <form action="ejercicio11.php" method="POST">
        Numero de dados a tirar:
        <select id="numero" name="numero" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" name="Enviar" value="Lanzar dados">
    </form>
    <?php
    if(isset($_POST["numero"]) && $_POST["numero"]>=1 && $_POST["numero"]<=10)
    {
        $numeros=array();
        for($i=0;$i<$_POST["numero"];$i++)
        {
            $resultadodado=rand(1,6);
            $numeros[]=$resultadodado;
            echo "<span> <img src='../dados/" . $resultadodado . ".jpg' class='imagen-mostrar'></span>";
        }


        //echo "<br>Los numeros que han salido son: ".implode(", ",$numeros);
        echo "<br>La suma de los ".$_POST["numero"]." dados es: ".array_sum($numeros);
    }
    ?>




</section>




</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>
