<?php

function incrementar(&$a){
    if(is_numeric($a)){
        $valor=intval($a);
        $valor++;
        $a=strval($valor);
    }
}

?>