<?php
    $usuario = $_POST['usuario']; 
    $contraseña = $_POST['contrasena'];

    if ($usuario == "admin" && $contraseña == "123")
    {
        echo "BIENVENIDOOOOOOOOOO ! " . $usuario;
        setCookie("Usuario",$usuario, time() + 60);
        session_start();
        $_SESSION['Usuario'] = $usuario;
        
    }
    else 
    {
        echo "Datos Incorrectos";
        
    }
    
?>