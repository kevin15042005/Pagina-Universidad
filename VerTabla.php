<?php
include("conexion.php");

// Consulta para obtener todos los registros de la tabla
$consulta = "SELECT * FROM datos";
$resultado = mysqli_query($conex, $consulta);

// Verifica si hay resultados
if (mysqli_num_rows($resultado) > 0) {
    // Crea la tabla HTML
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Usuario</th><th>Clave</th><th>Fecha</th><th>Rol</th></tr>";
    
    // Recorre los resultados y muestra cada registro en la tabla
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['usuario'] . "</td>";
        echo "<td>" . $fila['clave'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['rol'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    // Si no hay resultados, muestra un mensaje
    echo "No se encontraron registros.";
}

// finaliza la conexion
mysqli_close($conex);
?>