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
session_start();
if(isset($_POST["Enviar"])) {
    if($_POST["usuario"] == "pepe" && $_POST["clave"] == "1234") {
        $_SESSION["validado"]=1;
        $_SESSION["usuario"] = $_POST["usuario"];
        header(header: "Location: interno.php");
        exit();
    } else {
        setcookie("seguridad","0",time()-6000);
        echo "error de usuario o clave";
    }
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
