<?php
    if(isset($_POST['agregar_nombre'])){
        $Nombre = $_POST["agregar_nombre"];
        $Correo = $_POST["agregar_email"];
        $Usuario = $_POST["agregar_usuario"];
        $Pass = $_POST["agregar_pass"];
        
        $Conexion = mysqli_connect("localhost","root","","prograweb");
        /* Verificar conexión */
        if(!$Conexion){die("Fallo en la conexion al servidor " . mysqli_connect_error());}
    
        $Consulta = ("INSERT INTO usuarios (nombre,correo,usuario,usuarios.password) VALUES ('$Nombre','$Correo','$Usuario','$Pass')");
        $Respuesta = mysqli_query($Conexion,$Consulta);
        mysqli_close($Conexion);
        header("Location: index.php");
        exit();
    }
?>