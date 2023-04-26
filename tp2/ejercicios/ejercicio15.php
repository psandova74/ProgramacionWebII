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
<h3>Ejercicio 15</h3>
<section class="ejercicio-contenedor">
    <h4>Busqueda de cantidad de palabra clave</h4>
    <form action="ejercicio15.php" method="POST">
    <label>Palabra a buscar: </label> <input type="text" name="clave"><br><br>
    <label>Texto de busqueda: </label> <br>
        <textarea name="texto" cols="100" rows="20">¿Qué es PHP y cómo funciona?
PHP es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear páginas web, favoreciendo la conexión entre los servidores y la interfaz de usuario.
Entre los factores que hicieron que PHP se volviera tan popular, se destaca el hecho de que es de código abierto.
Esto significa que cualquiera puede hacer cambios en su estructura. En la práctica, esto representa dos cosas importantes:
es de código abierto, no hay restricciones de uso vinculadas a los derechos. El usuario puede usar PHP para programar en cualquier proyecto y comercializarlo sin problemas.
está en constante perfeccionamiento, gracias a una comunidad de desarrolladores proactiva y comprometida.</textarea> <br>
        <input type="submit" value="Enviar">
    </form>


</section>
 <section class="ejercicio-contenedor-grande" >
     <h4>Cantidad de ocurrencias</h4>
     <?php
     include_once("funciones.php");
     if(isset($_POST['texto'] )&& isset($_POST['clave'])){
         $texto = $_POST['texto'];
         $clave = $_POST['clave'];
         echo buscar($clave, $texto);

     }

     ?>
 </section>



</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>

