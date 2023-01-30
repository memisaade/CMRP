<?php

	$to = "";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
	$headers = "Desde: $from";
	$subject = "Web CPMR: Nuevo Mensaje";

	$fields = array();
	$fields{"name"} = "Nombre";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Telefono";
	$fields{"message"} = "Mensaje";

	$body = "Esto es lo que se ha enviado:\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
