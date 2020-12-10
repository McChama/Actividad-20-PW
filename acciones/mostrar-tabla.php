<?php
    $Conexion = mysqli_connect("localhost","root","","prograweb");
    if(!$Conexion) {die("Fallo en la conexion al servidor " . mysqli_connect_error());}

    $Respuesta = mysqli_query($Conexion,'SELECT id, nombre, correo, usuario FROM usuarios');

    while($Fila = mysqli_fetch_assoc($Respuesta)){
        echo "
            <tr>
                <th>".$Fila['id']."</th>
                <td>".$Fila['nombre']."</td>
                <td>".$Fila['correo']."</td>
                <td>".$Fila['usuario']."</td>
                <td><button class='button is-info mx-1'>Editar</button><button class='button is-danger mx-1'>Borrar</button>
            </tr>
        ";
    }
    mysqli_close($Conexion);
?>