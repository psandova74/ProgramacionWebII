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

    $sql="select * from usuario where nick='".$usuario .  "' and password='" . $clave ."';";
    $envio_consulta=$db->query($sql);// Aca solo le pasamos la consulta al motor de base de datos, pero no lo ejecuta.
        $fila=$envio_consulta->fetch_assoc(); //Este fetch toma la primer linea de la consulta. Toma de a uno.
        var_dump($fila);


    $db->close();

}

?>
<h1>Formulario de login</h1>
<form action="index.php" method="post" enctype="application/x-www-form-urlencoded" >
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario" placeholder="ingres nombre de usuario">
    <label for="clave">Clave: </label>
    <input type="password" name="clave" id="clave" placeholder="ingrese clave usuario">
    <br><br>
    <input type="submit" name="Enviar">
</form>



</body>
</html>
