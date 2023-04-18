<?php
class Saludo {
    // Declaración de una propiedad
    protected  $nombre = '';
    protected  $apellido = '';

     // Declaración de un método
    public function  __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario){
        $saludo = "";
         if($horario >= "05:00:00" && $horario < "13:00:00") 
            $saludo = "Buenos días ";
        elseif ($horario >= "13:00:00" && $horario < "21:00:00")
            $saludo = "Buenas Tardes ";
        else 
            $saludo = "Buenas Noches ";

        return ($this->nombre <> "" && $this->apellido <> "" ) ? ($saludo . $this->nombre ." ". $this->apellido) : $saludo;
    }
    
    public function saludoInformal($horario){
        $saludo = "";
        if($horario >= "05:00:00" && $horario < "13:00:00") 
           $saludo = ", que tengas buen dia!!!";
       elseif ($horario >= "13:00:00" && $horario < "21:00:00")
           $saludo = ", que tengas buenas tardes!!!";
       else 
           $saludo =  ", que tengas buenas noches!!!";
       return "Hola " . $this->nombre . " " .$saludo ;
    }

}



?>