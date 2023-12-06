<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Ainsertar </title>
</head>

<body>

	<?php 
		
		echo $matricula = $_POST['matricula'];
		echo $nomimagen = $_POST['nomimagen'].".jpg";
		echo $marca = $_POST['marca'];
		echo $modelo = $_POST['modelo'];
		echo $color = $_POST['color'];
		echo $precio = $_POST['precio'];

		$con = mysqli_connect("localhost","root","","automoviles");	
		$sql = mysqli_query($con,"select * from autos where idauto='$matricula'");
		$datos = mysqli_num_rows($sql);
			
			if($datos == 0){
		
				
			$consultaauto = mysqli_query($con,"insert into autos(idauto,imagen, idmarca,idmodelo,idcolor,idprecio) values('$matricula','$nomimagen',$marca,$modelo,$color,$precio);");
			
			header('location:principal.php?pag=agregarautos/consulta.php&men=1');
			
			
			}else {
		
					
						header('location:principal.php?pag=agregarautos/formularioAgregarAuto.php&men=2');
			
					}
	?>

</body>
</html>