<?php
	session_start(); 
	$pass="";
	$var_usuario=$_POST['usuario'];
	$var_correo=$_POST['correo'];


    include_once('class.phpmailer.php');
	include_once('class.smtp.php'); 

	include("conexion.php");

    $pass = mysql_query("SELECT contra from usuario where nombUsuario='$var_usuario' and email='$var_correo'");

	while($fila_recorre=mysql_fetch_array($pass)) {
	  
	   $mensaje[0]=$fila_recorre[0];
	    
	}

	$mensaje = 'Hola '.$var_usuario.' tu password es: '.$mensaje[0].' , Te recomendamos no olvidar de nuevo tu password.';

	//Este bloque es importante
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	 
	//Nuestra cuenta
	$mail->Username ='tecnoinfo722@gmail.com';
	$mail->Password = 'pruebacorreophp'; //Su password
	 
	//Agregar destinatario
	$mail->AddAddress($var_correo);
	$mail->Subject = 'Recuperar Password';

	$mail->Body = $mensaje;

	$mail->MsgHTML($mensaje);
	 
	//Avisar si fue enviado o no y dirigir al index
	if($mail->Send())
	{
	    echo'<script type="text/javascript">
	            alert("Contraseña enviada correctamente");
	            window.location="http://localhost/ti2/SoporteTecnicoDesdeCero/index.php"
	         </script>';
	}
	else{
	    echo'<script type="text/javascript">
	            alert("CONTRASEÑA NO ENVIADA, intentar de nuevo");
	            window.location="http://localhost/ti2/SoporteTecnicoDesdeCero/vista/recuperarPass.php"
	         </script>';
	}
	
    mysql_close();    
  
?>
