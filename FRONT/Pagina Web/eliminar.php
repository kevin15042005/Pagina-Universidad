<?php
include("conexion.php");

if(isset($_POST['eliminar'])) {
    $usuario = $_POST['usuario_eliminar'];

    $consulta = "DELETE FROM datos WHERE usuario='$usuario'";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {
        // Redirigir a alguna página de éxito
        header("Location: crearusuario.html");
        exit();
    } else {
        echo '<h3 class="error">Error al eliminar el registro</h3>';
    }
}
?>
