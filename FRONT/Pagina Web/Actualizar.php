<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula_actualizar = $_POST["cedula_actualizar"];
    $nuevo_nombre = $_POST["nuevo_nombre"];
    $nuevo_apellido = $_POST["nuevo_apellido"];

    $conectar = mysqli_connect("localhost", "root", "", "prueba");

    if (!$conectar) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $actualizar = "UPDATE datos SET nombre = ?, apellido = ? WHERE cedula = ?";
    $stmt = mysqli_prepare($conectar, $actualizar);
    mysqli_stmt_bind_param($stmt, "ssi", $nuevo_nombre, $nuevo_apellido, $cedula_actualizar);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conectar);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conectar);

    echo "<br><br>";
    echo "<a href='Sesion.html'>Volver al formulario</a>";
}
?>