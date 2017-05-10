<?php
session_start(); 
$var_inputUsuario=$_POST['usuario'];
$var_inputCorreo=$_POST['correo'];

//recontra
	

	//conexion a la BD
	include("conexion.php");

    

	
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
