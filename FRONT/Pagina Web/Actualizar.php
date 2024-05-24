<?php
include("conexion.php");

if(isset($_POST['actualizar'])) {
    $usuario = $_POST['usuario_actualizar'];
    $nuevaClave = $_POST['nueva_clave'];

    $consulta = "UPDATE datos SET clave='$nuevaClave' WHERE usuario='$usuario'";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {

        // Redirigir a alguna página de éxito

        header("Location: crearusuario.html");
        exit();
        
    } else {
        echo '<h3 class="error">Error al actualizar el registro</h3>';
    }
}
?>
