<?php
    $url = 'https://data.climacell.co/v4/timelines?apikey=Dwi0P815zlCH4YpYpKrmUl2Ynx1b4GlO&location=-34.6515231,-58.5098249&fields=temperature&timesteps=1d&units=metric';


    $response = file_get_contents($url);
   // $data = json_decode($response);
    $data = json_decode($response, true);
    // Recorremos los elementos del array asociativo
    $intervals = $data['data']['timelines'][0]['intervals'];
    foreach ($intervals as $interval) {
        // Accedemos a la propiedad 'temperature' de cada objeto 'interval'
        $temperature = $interval['values']['temperature'];
        $fecha = $interval['startTime'];
        $fecha_formateada = substr($fecha, 0, 10);
        echo "<h1> $fecha_formateada </h1>";
        echo "Temperatura: " . $temperature . "<br>";
    }


?>