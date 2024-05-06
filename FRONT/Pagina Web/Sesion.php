<?php

$conectar = mysqli_connect("localhost", "email", "password", "formulario");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$ciudad = $_POST["ciudad"];

$insertar = "INSERT INTO prueba1 (cc, nombre, apellido, ciudad) VALUES ($cedula, '$nombre', '$apellido', '$ciudad')";

mysqli_query ($conectar,  $insertar );

echo "Numero de Documentos ". $cedula ."<br>";
echo "nombre es ". $nombre ."<br>";
echo "apellido es". $apellido ."<br>";
echo "ciudad es ". $ciudad ;


// Datos para actualizar
$nuevoTelefono = "123456789";
$nombre = "Juan";

// Consulta de actualización
$consulta = "UPDATE usuarios SET telefono='$nuevoTelefono' WHERE nombre='$nombre'";


mysqli_query($conexion, $consulta);
?>