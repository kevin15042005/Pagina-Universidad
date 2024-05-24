<?php
// incuir conexion creada del host, root, etc

include("conexion.php");

if(isset($_POST['register'])) {

    if(strlen($_POST['usuario']) >= 1 && 
    strlen($_POST['password']) >= 1) {

        
        $name = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $fecha = date("Y-m-d"); 

        // se incluye el rol y en la consulta se tiene que agregar

        $rol = $_POST['rol']; //el rol por defecto va a estar siempre en usuario

        $consulta = "INSERT INTO datos(usuario, clave, fecha, rol) VALUES ('$name', '$password', '$fecha', '$rol')";

        $resultado = mysqli_query($conex, $consulta);

        if($resultado) {

            // cada vez que el registro sea exitoso se redirige al login para que el usuario pueda ingresar

            header("Location: sesion.html");
            exit();
        } else {
            echo '<h3 class="error">Error al registrar</h3>';
        }
    } else {
        echo '<h3 class="error">Llena los campos</h3>';
    }
}
?>
