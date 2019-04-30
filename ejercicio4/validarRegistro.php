<?php 
	function validarPass(){
	$user='';
	$pass='';
	$user2='';
	$pass2='';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$user = trim($_POST['user']);
		$pass = $_POST['pass'];
		$user2 = trim($_POST['user2']);
		$pass2 = $_POST['pass2'];
	
	}

	if($user==$user2 && $pass==$pass2){
		include ('registroCorrecto.php');
	}else{
	echo 'las contraseñas o nombres estan incorrectas';
		}
	}
	validarPass();

 ?>