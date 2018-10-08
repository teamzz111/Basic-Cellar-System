<?php
	session_start();

	if (!$_SESSION["activo"]) { 
		header("Location:login.php?error=2");
	}
?>
