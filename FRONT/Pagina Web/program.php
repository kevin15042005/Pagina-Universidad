<?php
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $conectar = mysqli_connect("localhost","root","","prueba");
    $insertar = "INSERT INTO datos(cedula, nombre, apellido) VALUES ($cedula, '$nombre', '$apellido')";

    mysqli_query($conectar, $insertar);
    
    $consultar = "SELECT * FROM datos";
    $resultado = mysqli_query($conectar, $consultar);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Cedula</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "</tr>";

    foreach($resultado as $resul){
        echo "<tr>";
        echo "<td>".$resul["cedula"]."</td>";
        echo "<td>".$resul["nombre"]."</td>";
        echo "<td>".$resul["apellido"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<br><br><br><br>";
    echo "<a href='index.html'>Volver al formulario</a>";
?>
