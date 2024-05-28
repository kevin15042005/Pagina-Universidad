<?php
// registrar.php

include("conexion.php");

if(isset($_POST['ingresar'])) {
    
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];  // Recibiendo el rol desde el formulario

    $consulta = "INSERT INTO datos(usuario, clave, rol) VALUES ('$usuario', '$clave', '$rol')";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {
        echo '<h3 class="success">Registro creado correctamente.</h3>';
        echo '<script>';
        echo 'setTimeout(function(){';
        echo '  window.location.href = "Sesion.html";';
        echo '}, 2000);';  // Redirigir después de 2 segundos
        echo '</script>';
        exit();  // Asegúrate de que no haya salida HTML antes de la redirección
    } else {
        echo '<h3 class="error">Error al crear el registro.</h3>';
    }
    
}
?>
