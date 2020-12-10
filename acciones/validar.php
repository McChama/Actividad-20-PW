<?php
    function Validar_Login(){
        $Nombre_Usuario = $_POST["nombre"];
        $Correo_Usuario = $_POST["email"];
        
        $Conexion = mysqli_connect("localhost","root","","prograweb");
        /* Verificar conexión */
        if(!$Conexion)
            die("Fallo en la conexion al servidor " . mysqli_connect_error());
    
        $Consulta = ("SELECT * FROM usuarios WHERE usuario = '$Nombre_Usuario' AND correo = '$Correo_Usuario'");

        $Respuesta = mysqli_query($Conexion,$Consulta);
        $Es_Valido = $Respuesta->num_rows;
        mysqli_close($Conexion);

        
        return $Es_Valido;
    }
?>
