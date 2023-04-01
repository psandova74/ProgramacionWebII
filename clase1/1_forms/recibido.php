<?php
    var_dump($_GET);
    

        $email=$_GET['email'];
        if(validarCorreo($email))
            echo "El correo es valido";
        else
            echo "El correo no es valido";

     
        function validarCorreo($email){
            return true;

        }

?>