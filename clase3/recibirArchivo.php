<?php
var_dump($_FILES);
echo "<br><br>";
var_dump($_POST);
echo "<br><br>";
echo "Hemos recibido el archivo: " . $_FILES["archivo"]["name"] . "<br>";
echo "Es de tipo: "  . $_FILES["archivo"]["type"] ." y tiene un tamano: " . $_FILES["archivo"]["size"] . "<br>";

move_uploaded_file($_FILES["archivo"]["tmp_name"],"archivos/" . $_POST["nombre"]);

echo "<a href='archivos/'". $_POST["nombre"] ."> Descargar archivo </a>";
