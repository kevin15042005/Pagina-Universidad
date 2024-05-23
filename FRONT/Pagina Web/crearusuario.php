<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula_crear = $_POST["cedula_crear"];
    $nombre_crear = $_POST["nombre_crear"];
    $apellido_crear = $_POST["apellido_crear"];

    $conectar = mysqli_connect("localhost", "root", "", "prueba");

    if (!$conectar) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $crear = "INSERT INTO datos (cedula, nombre, apellido) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conectar, $crear);
    mysqli_stmt_bind_param($stmt, "iss", $cedula_crear, $nombre_crear, $apellido_crear);

    if (mysqli_stmt_execute($stmt)) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario: " . mysqli_error($conectar);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conectar);

    echo "<br><br>";
    echo "<a href='Sesion.html'>Volver al formulario</a>";
}
?>