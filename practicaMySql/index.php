<?php
include_once('funciones.php');
$conn = getConexion();

$sql = "select * from pokemones";
$result = $conn->query($sql);
$resultado = $result->fetch_all(mode: MYSQLI_ASSOC);

$conn->close();
?>
<html>
<body>
    <h1>Pokemones</h1>
<?php
    if(!empty($_GET['message'])){
        echo "Pokemon dado de " . $_GET['message'] . "!";
    }
?>
    <div>
        <?php
        foreach ($resultado as $element) {
            echo $element['nombre'] ;
            echo "<a href='eliminar.php?id=". $element["idPokemon"] . "'> X </a><br>";
        }
        ?>
    </div>
    <br>
    <div><a href="formInsertar.php">Alta Pokemon</a> </div>
</body>
</html>
