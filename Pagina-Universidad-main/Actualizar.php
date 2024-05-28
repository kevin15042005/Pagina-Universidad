<?php
include("conexion.php");

if(isset($_POST['actualizar'])) {
    $usuario = $_POST['usuario_actualizar'];
    $nuevaClave = $_POST['nueva_clave'];

    $consulta = "UPDATE datos SET clave='$nuevaClave' WHERE usuario='$usuario'";
    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {
        // Verificar si se afectó alguna fila
        if(mysqli_affected_rows($conex) > 0) {
            // Notificación de éxito
            echo '<h3 class="success">Usuario actualizado correctamente</h3>';
            // Redirigir a alguna página de éxito después de mostrar la notificación
            header("refresh:2; url=Sesion.html"); // Redirige después de 2 segundos
            exit();
        } else {
            // Notificación de error
            echo '<h3 class="error">Error: El usuario especificado no existe en la base de datos</h3>';
            // Redirigir a la página de actualización después de mostrar la notificación
            header("refresh:5; url=actualizarD.html"); // Redirige después de 5 segundos
            exit();
        }
    } else {
        // Notificación de error
        echo '<h3 class="error">Error al actualizar el registro</h3>';
        echo '<p>Descripción del error: ' . mysqli_error($conex) . '</p>'; // Muestra el mensaje de error de MySQL
        // Redirigir a la página de actualización después de mostrar la notificación
        header("refresh:5; url=Sesion.html"); // Redirige después de 5 segundos
        exit();
    }
}
?>
