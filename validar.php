<?php
	session_start();
	if(isset($_GET["opt"]) && $_GET["opt"] == 1){

		include('conexion.php');
		if(isset($_GET['opt'])){
			if($_GET['opt'] == 1){
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$result = $con->query("SELECT nombre, cargo FROM personal WHERE id = $user AND pass = '$pass'");
				if($result->num_rows <= 0 ){
					header("Location: login.php?error=1");
				} else {
					$row = $result->fetch_array(MYSQLI_ASSOC);
					$_SESSION['activo'] = true;
					$_SESSION['usuario'] = $user;
					if($row['cargo'] == "Admin"){
						$_SESSION['admin'] = true;
						header("Location: principalAdmin.php");
					} else {
						header("Location: principalBodega.php");
					}
				}
			} 
		}
	} else {
		if(!isset($_SESSION['activo']) || !isset($_SESSION['usuario'])){
			header("Location: login.php?error=2");
		}
	}
	

?>