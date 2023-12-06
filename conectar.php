    <?php
//mysqli asi funciona 
function conectar($servidor, $usuario, $clave, $base) {
		$con = mysqli_connect($servidor, $usuario, $clave);	
		if(!$con) {
			echo "No se pudo conectar a $servidor";
			exit;
		}
		if(!mysqli_select_db($con, $base)) {
			echo "No se pudo establecer $base como activa<br>";
			exit;
		}
		return $con;

	}
echo"coneccion";
	
	$con = mysqli_connect("localhost","root","","buzon");
	?>