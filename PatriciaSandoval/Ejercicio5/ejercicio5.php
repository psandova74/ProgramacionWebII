<?php


// a) Resuelva la solución utilizando la estructura de control for ";  
function sumatoria_a($vector_sumatoria){
    for ( $i=0 ,$sumatoria = 0 ; $i < count($vector_sumatoria) ; $i++ ) { 
        if (is_numeric($vector_sumatoria[$i])){
            $sumatoria += intval($vector_sumatoria[$i]);
        }
    }
    return $sumatoria;
}

// b) Resuelva la solución utilizando la estructura de control for each "; 
function sumatoria_b($vector_sumatoria){
    $sumatoria = 0;
    foreach ( $vector_sumatoria as $key => $value ) { 
        if (is_numeric($value)){
            $sumatoria += intval($value);
        }
    }
    return $sumatoria;
}

// c) Resuelva la solución utilizando la estructura de control while"; 
function sumatoria_c($vector_sumatoria){
    $i =0 ;
    $sumatoria =0;
    while ( $i < count($vector_sumatoria)) { 
        if (is_numeric($vector_sumatoria[$i])){
            $sumatoria += intval($vector_sumatoria[$i]);
        }
        $i++;
    }
    return $sumatoria;
}
?>