<?php
include("conexion.php");

if(isset($_POST['ingresar'])) {
    
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $consulta = "INSERT INTO datos(usuario, clave) VALUES ('$usuario', '$clave')";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {
        // Redirigir a alguna página de éxito
        header("Location: crearusuario.html");
        exit();
    } else {
        echo '<h3 class="error">Error al crear el registro</h3>';
    }
}
?>
