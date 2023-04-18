<?php 
    function semaforo_a($color){    

        $mensaje = "";
        if($color == "verde"){
            $mensaje= "Avance";
        }else if($color == "amarillo"){
            $mensaje= "Precaucion";
        }else if($color == "rojo"){
            $mensaje= "Pare";
        }else{
            $mensaje= "Estado desconocido";
        }
        return $mensaje;
    }

    function semaforo_b($color){
        $mensaje = "";
        $color == "verde" ? $mensaje="Avance" : ($color=="amarillo" ? $mensaje="Precaucion": 
                                            ($color=="rojo" ? $mensaje="Pare" : 
                                                            $mensaje="Estado desconocido"));
            
                            
        return $mensaje;
    }

    function semaforo_c($color){
        $mensaje = "";
        switch($color){
            case "verde":
                $mensaje= "Avance";
                break;
            case "amarillo":
                $mensaje= "Precaucion";
                break;
            case "rojo":
                $mensaje= "Pare";
                break;
            default:
            $mensaje= "Estado desconocido";
                break;
        }    
        return $mensaje;
    }
?>
