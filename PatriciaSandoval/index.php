<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guia de Trabajos Practicos</title>
    <link rel="stylesheet" href="css/stylePractico.css">
</head>
<header>
    <h2>Guia de Trabajos Practicos</h2>
</header>
<body>
	
<section class="main-content">
    <article class="item-ejercicio">
        <h3>Ejercicio 1</h3>
        <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo” “amarillo”,”verde”). </p> 
        <p>  Dicha función devolverá el estado que corresponde: “frene”, “precaución”, “avance” o “estado desconocido” ante un caso no esperado.
        </p>
        <br>
        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <p>Ingrese un color del semaforo: </p>
            <label for="color">Color: </label>
            <input type="text" place_holder="Escribir rojo, verde o amarillo" name="color">
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor">
            <?php
                    include_once('Ejercicio1/ejercicio1.php');
                    $color = isset($_GET['color']) ? strtolower($_GET['color']) : "";
             
                    echo "<p> a) función semaforo_a(\$color): Resuelva la solución utilizando if else </p>";  
                    echo "<span>" . semaforo_a($color) . "</span>";
                    echo "<p> b) función semaforo_b(\$color): Resuelva la solución utilizando if inline (return ?: ) </p>";  
                    echo "<span>" . semaforo_b($color) . "</span>";
                    echo "<p> c) función semaforo_c(\$color): Resuelva la solución utilizando switch </p>"; 
                    echo "<span>" . semaforo_c($color) . "</span>";
            ?>
        </div>
    </article>
    <article class="item-ejercicio">
        <h3>Ejercicio 2</h3>
        <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática: recibe dos parámetros y devuelve              el cuadrado de la suma de ambos.   (a+b) <sup>2  <br> </p>

        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="numero">Numero A : </label>
            <input type="text" place_holder="Escribir un numero" name="numeroa">
            <label for="numero">Numero B : </label>
            <input type="text" place_holder="Escribir un numero" name="numerob">
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor">

            <?php
                    include_once('Ejercicio2/ejercicio2.php');
                    $numeroa = isset($_GET['numeroa']) ? $_GET['numeroa'] : "";
                    $numerob = isset($_GET['numerob']) ? $_GET['numerob'] : "";
             
                    echo " <p>a) función binomioCuadradoPerfecto_a(\$a, \$b): Resuelva la solución utilizando la función de
                    potencia </sup></p>  " ; 
                    echo "<span>" . binomioCuadradoPerfecto_a($numeroa,$numerob) . "</span>"; 
                    echo "<p>b) función binomioCuadradoPerfecto_b(\$a,\$b): Resuelva la solución utilizando la fórmula
                    desarrollada del binomio:  a <sup>2 </sup> + 2*a*b + b <sup>2 </sup>  </p>";
                    echo "<span>" . binomioCuadradoPerfecto_b($numeroa,$numerob) . "</span>"; 
                
             ?>
        </div>
    </article>

    <article class="item-ejercicio">
        <h3>Ejercicio 3</h3>
        <p>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva ambos textos concatenados como uno solo</p>
        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="texto">Texto A : </label>
            <input type="text" place_holder="Escribir un texto" name="cadenaa">
            <label for="texto">Texto B : </label>
            <input type="text" place_holder="Escribir un texto" name="cadenab">
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor"> 
            <?php
                    include_once('Ejercicio3/ejercicio3.php');
                    $cadenaa = isset($_GET['cadenaa']) ? $_GET['cadenaa'] : "";
                    $cadenab = isset($_GET['cadenab']) ? $_GET['cadenab'] : "";
                    echo "<span>" . concatenar($cadenaa,$cadenab) . "</span>"; 
             ?>
        </div>

    </article>

    <article class="item-ejercicio">
        <h3>Ejercicio 4</h3>
        <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros por referencia)</p>
        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="numero-inc">Numero Ingresado: </label>
            <input type="text" place_holder="Escribir un numero" name="numero-inc">
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor">
            <?php
                include_once('Ejercicio4/ejercicio4.php');
                $numeroinc = isset($_GET['numero-inc']) ? $_GET['numero-inc'] : "";
                incrementar($numeroinc) ;
                echo "<span>" . $numeroinc  . "</span>";  
            ?>

        </div>
    </article>

    <article class="item-ejercicio">
        <h3>Ejercicio 5</h3>
        <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus valores.</p>
        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <p>Esta solucion solo contempla los numericos, y suma enteros, ignora cualquier otro valor</p>
            <label for="vector-sumatoria">Ingresar numeros seprardos por coma: </label>
            <input type="text" place_holder="Escribir numeros a sumar" name="vector-sumatoria">
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor">
            <?php
                include_once('Ejercicio5/ejercicio5.php');
                $cadena_sumatoria = (isset($_GET['vector-sumatoria']) ? $_GET['vector-sumatoria'] : "");
                $vector_sumatoria=explode("," , $cadena_sumatoria);
               
                echo "<p> a) función sumatoria_a( \$array ): Resuelva la solución utilizando la estructura de control for </p>";  
                echo "<span>" . sumatoria_a($vector_sumatoria) . "</span>";
                echo "<p> b) función sumatoria_b( \$array ): Resuelva la solución utilizando la estructura for each </p>";  
                echo "<span>" . sumatoria_b($vector_sumatoria) . "</span>";
                echo "<p> c) función sumatoria_c( \$array ): Resuelva la solución utilizando la estructura de control while </p>"; 
                echo "<span>" . sumatoria_c($vector_sumatoria) . "</span>";
            ?>
        </div>
    </article>
    
    <article class="item-ejercicio">
        <h3>Ejercicio 6</h3>
        <p>Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una persona.</p>
        <form action="index.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="texto">Nombre : </label>
            <input type="text" place_holder="Escribir nombre" name="nombre"><br><br>
            <label for="texto">Apellido: </label>
            <input type="text" place_holder="Escribir apellido" name="apellido"><br><br>
            <input type="submit" value="sumit" >
        </form>
        <br>
        <div class="ejercicio-contenedor">
            <?php
                include_once('Ejercicio6/ejercicio6.php');
                $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
                $apellido = isset($_GET['apellido']) ? $_GET['apellido'] : "";
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                $horario = date("H:i:s");
                $instancia = new Saludo($nombre, $apellido);
                
               
                echo "<p> Dicha clase debe implementar el método saludoFormal( \$horario ) el cual debe responder
                concatenado al nombre un prefijo dependiendo del horario:
                <p>05hs a 13hs “Buenos días</p>
                <p>13hs a 21hs “Buenas tardes”</p>
                <p>21hs a 05hs “Buenas noches” </p>
                <p>Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”</p>";  
                echo "<span>" . $instancia->saludoFormal($horario) . "</span>";
                echo "<p> Dicha clase debe implementar también el método saludoInformal( \$horario ) el cual debe responder
                sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
                perteneciente al horario .
                Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
                “¡Hola Ezequiel! Que tengas un buen día”
                 </p>";  
                echo "<span>" .  $instancia->saludoInformal($horario) . "</span>";
            ?>
        </div>
    </article>
          
</section>
</body>
<footer>
    <h5>Patricia Lorena Sandoval</h5>
</footer>
</html>
