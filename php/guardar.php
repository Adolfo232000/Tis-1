<?php
include("conexion.php");

$nombre_resibido = $_POST["nombre"]; // poner el "name" del formulario
$origen_resibido = $_POST["origen"]; // poner el "name" del formulario
$logo_resibido = $_POST["logo"]; // poner el "name" del formulario

// echo $nombre_resibido;
// echo "<br>";
// echo $origen_resibido;
// echo "<br>";
// echo $logo_resibido;

$insert = " INSERT INTO marcas(nombre, origen, logo)
            VALUES('$nombre_resibido' , '$origen_resibido' , '$logo_resibido')";

$resultado = mysqli_query($conexion, $insert);

header("Location: index.php");
?>
