<?php
include("conexion.php");

if(isset($_POST['eliminar'])) {
    $usuario = $_POST['usuario_eliminar'];

    $consulta = "DELETE FROM datos WHERE usuario='$usuario'";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {
        // Verificar si se afectó alguna fila
        if(mysqli_affected_rows($conex) > 0) {
            // Notificación de éxito
            echo '<h3 class="success">El registro se eliminó correctamente</h3>';
            // Redirigir a alguna página de éxito después de mostrar la notificación
            header("refresh:2; url=sesion.html"); // Redirige después de 2 segundos
            exit();
        } else {
            // Notificación de error
            echo '<h3 class="error">Error: El usuario especificado no existe en la base de datos</h3>';
            // Redirigir a la página de error después de mostrar la notificación
            header("refresh:5; url=sesison.html"); // Redirige después de 5 segundos
            exit();
        }
    } else {
        // Notificación de error
        echo '<h3 class="error">Error al eliminar el registro</h3>';
        echo '<p>Descripción del error: ' . mysqli_error($conex) . '</p>'; // Muestra el mensaje de error de MySQL
        // Redirigir a la página de error después de mostrar la notificación
        header("refresh:5; url=sesison.html"); // Redirige después de 5 segundos
        exit();
    }
}
?>

