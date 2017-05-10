<?php
session_start(); 
$var_usuario=$_POST['usuario'];
$var_correo=$_POST['correo'];

//recontra
	

	//conexion a la BD
	include("conexion.php");

    $log = mysql_query("SELECT contra from usuario where nombUsuario='$var_usuario' and correo='$var_correo'"); 

	
	mysql_query($query);
        mysql_close();    
        //echo '<script> alert("El usuario se ha registrado exitosamente"); </script>';
    
    
    
	/*if($_SESSION['tipoUsuario']=="admin"){
            echo '<script> window.location="vista/indexAdmin.php"; </script>';
    }else{
            echo '<script> window.location="vista/indexUser.php"; </script>';
    }
	*/	
	

    
?>
