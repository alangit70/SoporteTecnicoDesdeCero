<?php
	session_start(); 
    include 'conexion.php';

	$usuario=$_POST['usuario'];
	$password=$_POST['contra'];
    

	$log = mysql_query("SELECT * from usuario where nombUsuario='$usuario' and contra='$password'");
    
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);

		if ($row['estado']=="3") {
			echo '<script> alert("Usuario BLOQUEADO, contacta a tu administrador para desbloquear");</script>';
			echo '<script> window.location="../vista/login.php"; </script>';
		}
		else {
	              $_SESSION["usuario"] = $row['nombUsuario'];
	              $_SESSION["tipoUsuario"] = $row['tipo'];

			$restablecer = mysql_query("UPDATE usuario SET estado='0' WHERE nombUsuario='$usuario'");              
	        
	        if($row['tipo']=="admin"){
	            echo '<script> window.location="../vista/indexAdmin.php"; </script>';
	        }else if($row['tipo']=="user"){
	            echo '<script> window.location="../vista/indexUser.php"; </script>';
	        }
		}
    }
    else{
			
		$log2 = mysql_query("SELECT * from usuario where nombUsuario='$usuario'");

    	if (mysql_num_rows($log2)>0) {
			$row2 = mysql_fetch_array($log2);

			if ($row2['estado']=="0") {
				$masuno = mysql_query("UPDATE usuario SET estado='1' WHERE nombUsuario='$usuario'");
				echo '<script> alert("Contraseña Incorrecta, tienes dos intentos más");</script>';
				echo '<script> window.location="../vista/login.php"; </script>';
			}
			if ($row2['estado']=="1") {
				$masdos = mysql_query("UPDATE usuario SET estado='2' WHERE nombUsuario='$usuario'");
				echo '<script> alert("Contraseña Incorrecta, tienes un intento más");</script>';
				echo '<script> window.location="../vista/login.php"; </script>';
			}
			if ($row2['estado']=="2") {
				$mastres = mysql_query("UPDATE usuario SET estado='3' WHERE nombUsuario='$usuario'");
				echo '<script> alert("Usuario BLOQUEADO, contacta a tu administrador para desbloquear");</script>';
				echo '<script> window.location="../vista/login.php"; </script>';
			}
			if ($row2['estado']=="3") {
				echo '<script> alert("Usuario BLOQUEADO, contacta a tu administrador para desbloquear");</script>';
				echo '<script> window.location="../vista/login.php"; </script>';
			}									

		}
		else {
			echo '<script> alert("Usuario no registrado");</script>';
			echo '<script> window.location="../vista/login.php"; </script>';
		}
	}
		
?>
