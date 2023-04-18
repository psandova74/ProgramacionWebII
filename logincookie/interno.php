<?php
$hash = file_get_contents(filename: "seguridad.txt");
if($_COOKIE["seguridad"] != $hash){
    header(header:"Location: index.php");
    exit();
}
echo "Hola!!!!!!";
//interno.php
