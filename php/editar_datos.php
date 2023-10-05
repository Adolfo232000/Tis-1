<?php
    include("conexion.php");

    $nombre_resibido = $_POST["nombre"]; 
    $origen_resibido = $_POST["origen"]; 
    $logo_resibido = $_POST["logo"]; 
    $id_resibido = $_POST["id"];
    

    
    $insert = "UPDATE marcas SET nombre = '$nombre_recibido', origen='$origen_resibido', logo= '$logo_resibido' WHERE id ='$id_resibido'";
    
    $resultado = mysqli_query($conexion, $insert);
    header("Location: index.php");
?>