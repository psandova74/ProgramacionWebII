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
<h3>Ejercicio 9</h3>
<div class="ejercicio-contenedor">
<section class="flex-container">

   <?php
   $directory="../imagenes";
   $dirint = dir($directory);
   while (($archivo = $dirint->read()) !== false)
   {
      if( $archivo != '.' && $archivo != '..' ) {
          if (((strpos($archivo, "gif") || strpos($archivo, "jpeg") ||
                  strpos($archivo, "jpg")) || strpos($archivo, "png"))) {
              echo "<span> <img src='../imagenes/" . $archivo . "' class='imagen-mostrar'> <label> " . $archivo . "</label></span>";
          }
      }

   }
   $dirint->close();

    ?>
</section>
</div>
<section class="ejercicio-contenedor-grande">
    <form action="subeimagen.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <input type="file" name="archivo" >
        <input type="submit" name="Enviar" value="Publicar">
    </form>

</section>

</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>
