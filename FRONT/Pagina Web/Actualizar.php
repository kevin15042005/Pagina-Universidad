<?php
    $cedula_actualizar = $_POST["cedula_actualizar"];
    $nuevo_nombre = $_POST["nuevo_nombre"];
    $nuevo_apellido = $_POST["nuevo_apellido"];

    $conectar = mysqli_connect("localhost","root","","prueba");
    $actualizar = "UPDATE datos SET nombre = '$nuevo_nombre', apellido = '$nuevo_apellido' WHERE cedula = $cedula_actualizar";

    mysqli_query($conectar, $actualizar);

    echo "<br>";
    echo "<br>";

    echo "<a href='index.html'>Volver al formulario</a>";
?>
