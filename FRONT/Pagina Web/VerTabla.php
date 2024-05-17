<?php
    // $cedula=$_GET["cedula"];
    // $nombre=$_GET["nombre"];
    // $apellido = $_GET["apellido"];

    // (nombre servidor, usuario, contraseña, base de datos)
    $conectar = mysqli_connect("localhost","root","","prueba");
    $consultar = "select *from datos";
    $resultado = mysqli_query($conectar,$consultar); //devuelve un arreglo


    echo "<table border='|'>";
    echo "<tr>";
    echo "<th> Cedula </th>";
    echo "<th> Nombre </th>";
    echo "<th> Apellido </th>";
    echo "</tr>";

    
    foreach($resultado as $resul){
        echo "<tr>";
        echo "<td>". $resul["cedula"] . "</td>";
        echo "<td>". $resul["nombre"]. "</td>";
        echo "<td>". $resul["apellido"]. "</td>";
        echo "</tr>";
    }

    echo "<br>";
    echo "<br>";

    echo "<a href='index.html'>Volver al formulario</a>";

    echo "<br>";

?>