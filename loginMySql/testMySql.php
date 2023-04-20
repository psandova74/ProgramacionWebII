<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de login</title>
</head>
<body>
<?php

if(isset($_POST["Enviar"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $db = new mysqli(hostname: "localhost:3306",username: "root",password: "",database: "pw");
    echo $db->connect_error;  // Error de la conexion
    echo "<br><br>";
    echo $db->error; //Error de la consulta, si falla la anterior, no llega.
    $sql="select * from usuario;";
    $envio_consulta=$db->query($sql);// Aca solo le pasamos la consulta al motor de base de datos, pero no lo ejecuta.
    echo var_dump( $envio_consulta); // Aca vemos que aun no tenemos los datos de la tabla.

    $fila=$envio_consulta->fetch_assoc(); //Este fetch toma la primer linea de la consulta. Toma de a uno.
    var_dump($fila);

    $filas =$envio_consulta->fetch_all(); // Este fetch toma todos los registros a partir de donde quedo seteado.
    //Sino se seteo nada, empieza del inicio y la lista completa.
    var_dump($filas);

    $envio_consulta->data_seek(offset: 0); // con este seek me posisiono al inicio de la tabla.
    // Sino me ejecuta el siguiente comando a partir del segundo registro.
    $filas =$envio_consulta->fetch_all(); // Este fetch toma todos los registros a partir de donde quedo seteado.
    //Sino se seteo nada, empieza del inicio y la lista completa.
    var_dump($filas);

   $db->close();  // Cerrar la conexion cuando se finaliza su uso

}

?>
<h1>Formulario de login</h1>
<form action="testMySql.php" method="post" enctype="application/x-www-form-urlencoded" >
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario" placeholder="ingres nombre de usuario">
    <label for="clave">Clave: </label>
    <input type="password" name="clave" id="clave" placeholder="ingrese clave usuario">
    <br><br>
    <input type="submit" name="Enviar">
</form>



</body>
</html>
