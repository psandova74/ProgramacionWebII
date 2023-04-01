<?php
    var_dump($_POST);
    $email=$_POST['email'];
    if(validarCorreo($email))
        echo "El correo es valido";
    else
        echo "El correo no es valido";

 
    function validarCorreo($email){
        return true;

    }
?>
