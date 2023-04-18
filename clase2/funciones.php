<?php
function esMayorDeDedad($edad){
    if($edad > 18)
    echo 'Eres mayor de edad';
else if ($edad < 18)
        echo 'Eres menor de edad';
    else    
        echo 'Tienes 18, felicidades';
}

?>