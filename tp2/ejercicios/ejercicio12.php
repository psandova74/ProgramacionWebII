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
<h3>Ejercicio 12</h3>
<section class="ejercicio-contenedor">

    <h1>Ingrese sus datos de ingreso a nuestro planeta</h1>
    <form method="post" action="extraterrestes.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="planeta">Planeta:</label>
        <select id="planeta" name="planeta">
            <option value="Mercurio">Mercurio</option>
            <option value="Venus">Venus</option>
            <option value="Tierra">Tierra</option>
            <option value="Marte">Marte</option>
            <option value="Jupiter">Júpiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Urano">Urano</option>
            <option value="Neptuno">Neptuno</option>
            <option value="Pluton">Pluton</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form><br>

<?php
$archivo = 'visitas.json';
if(file_exists($archivo)){
    $datos = file_get_contents($archivo);
    $array_datos = json_decode($datos, true); // convierte el JSON en un array asociativo
    $total_visitas = 0;
    foreach($array_datos as $visita){
        echo $visita['nombre'].' visitó '.$visita['planeta'].'<br>';
        if($visita['planeta'] != 'Tierra'){
            $total_visitas++;
        }
    }
    echo '<br>Total de visitas a planetas que no son la Tierra: '.$total_visitas;
}else{
    echo '<br>No hay visitas registradas aún';
}
?>



</section>


</body>
<footer>
    <h5>Programacion Web II  -  Guia de Trabajos Practicos</h5>
</footer>
</html>
