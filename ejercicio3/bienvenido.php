<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
<?php
		function verificarPass($usua,$pass){
			$ingUsuario = $_REQUEST['usuario'];
			if ($usua==$ingUsuario) {
				$nombre = strtoupper($ingUsuario);
				echo "bienvenido " . $nombre;
			}elseif($usua!=$ingUsuario){
				echo "password incorrecto";
			}
		}
	?>


</body>
</html>

<?php 

	verificarPass('omar','1234');
	$pass = array(
			'juan' => '12345',
			'omar' => '1234',
			'david' => '123',
			'carlos' => '123456',
			'jose' => '1234567'
		);

 ?>
