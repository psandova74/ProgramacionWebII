<?php 

function binomioCuadradoPerfecto_a($a,$b){
    $resultado = 0;
    if(is_numeric($a) && is_numeric($b)){
        $valora=intval($a);
        $valorb=intval($b);
        $resultado=pow(($valora+$valorb) , 2);
    }
     return $resultado;
} 

function binomioCuadradoPerfecto_b($a,$b){
    $resultado = 0;
    if(is_numeric($a) && is_numeric($b)){
        $valora=intval($a);
        $valorb=intval($b);
        $resultado= ($valora) ** 2 + 2 * $valora * $valorb +  ($valorb) ** 2;
    }
     return $resultado;
} 

?>