<?php
	if($_GET["opt"] == 1){

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
						header("Location: principalAdmin.php");
					} else {
						header("Location: principalBodega.php");
					}
				}
			} 
		}
	} else {
		if(!isset($_SESSION['activo']) || !isset($_SESSION['usuario'])){
			header("Location: login.php");
		}
	}
      
if ($resul > 0) {
		session_start();


		if ($usuario == '153412977') {
			header("Location:eliminar.php");

		}else if ($usuario == '132497123') {
			header("Location:modificar.php");

		}else if ($usuario == '91273320') {
			header("Location:mostrar.php");
		}

}else{
	header("Location:formulario.php?error=si");
}

?>