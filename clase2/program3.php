<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$edad=18;
if($edad > 18)
    echo 'Eres mayor de edad';
else if ($edad < 18)
        echo 'Eres menor de edad';
    else    
        echo 'Tienes 18, felicidades';

echo '<br>';

echo $edad>=18?
'Eres mayor de edad':
'Eres menor de edad';

echo '<br>';

for ($i=1;$i<=10; $i++){
    echo $i . '<br>';
}


echo '<br>';
switch ($edad) {
    case 18:
        echo 'Eres mayor de edad';
        break;
    case 10:
        echo 'Eres menor de edad';
        break;
    case 30:
        echo 'Me duele la espalda';
        break;
    default:
        echo 'Eres menor de edad';
        break;
}
echo '<br><br>';

$cars = array('Volvo','BMW','Toyota');
//var_dump($cars);
foreach($cars as $car)
    echo $car . '<br>';

echo '<br><br>';
echo 'Minimo: ' . (min(0, 150, 30, 20, -8, -200));  // returns -200
echo '<br>';
echo 'Maximo: ' . (max(0, 150, 30, 20, -8, -200));  // returns 150
echo '<br>';
echo 'Valor Absoluto: ' . (abs(-6.7));  // returns 6.7
?>
</body>
</html>