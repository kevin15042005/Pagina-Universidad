<?php
    $cedula_eliminar = $_POST["cedula_eliminar"];

    $conectar = mysqli_connect("localhost","root","","prueba");
    
    $eliminar = "DELETE FROM datos WHERE cedula = $cedula_eliminar";

    if (mysqli_query($conectar, $eliminar)) {
        if (mysqli_affected_rows($conectar) > 0) { 
            echo "El usuario se eliminó exitosamente.";
        } else {
            echo "El usuario con la cédula proporcionada no existe.";
        }
    } else {
        echo "Hubo un error al eliminar el usuario: " . mysqli_error($conectar);
    }

    echo "<br>";
    echo "<br>";

    echo "<a href='index.html'>Volver al formulario</a>";
?>
