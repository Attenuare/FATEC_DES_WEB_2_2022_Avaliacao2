<?php
	session_start();
	 
	// Unset todas as variáveis
	$_SESSION = array();
	session_destroy();
	
	header("location: ../login/login_information.php");
	exit;
?>