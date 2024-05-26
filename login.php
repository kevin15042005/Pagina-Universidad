<?php
include("conexion.php");

if(isset($_POST['usuario']) && 
isset($_POST['clave'])) {

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Consulta para verificar si el usuario existe en la base de datos
    $consulta = "SELECT * FROM datos WHERE usuario = '$usuario' AND clave = '$clave'";
    $resultado = mysqli_query($conex, $consulta);

    if(mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        
        // Iniciar sesion 

        // si el rol del usuario es administrador lo va a llevar a la pagina de administrador 
        if ($usuario['rol'] == 'administrador') {
            header("Location: Administrador.html");
            exit();
        } else {
            header("Location: index.html");
            exit();
        }
    } else {
        // si el usuario no existe nos mostrara el siguiente mensaje 
        echo "Usuario no existe o es incorrecto";

        // redireccion si el usuario no es el correcto
         header("Location: Sesion.html");
         exit();
    }
}
?>
