<?php
session_start();
if(!isset($_SESSION["validado"])){
    header(header:"Location: index.php");
    exit();
}
echo "Hola " . $_SESSION["usuario"] . "!!!!!!";
//interno.php
