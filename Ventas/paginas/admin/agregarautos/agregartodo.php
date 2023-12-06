<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Ainsertar </title>
</head>

<body>

	<?php 
		
		$marca = $_POST['marca'];
		$color = $_POST['color'];
		$precio = $_POST['precio'];

		$con = mysqli_connect("localhost","root","","automoviles");		

		$sqlmarca = mysqli_query($con,"select * from marca where nommarca='$marca'");
		$sqlmar = mysqli_num_rows($sqlmarca);
		if($sqlmar == 0){ 
		$consultamarca =  mysqli_query($con,"insert into marca(nommarca) values('$marca');");
		     	}
				
		$sqlcolor = mysqli_query($con,"select * from color where nomcolor='$color'");
		$sqlcol = mysqli_num_rows($sqlcolor);
		if($sqlcol == 0){ 		
		$consultacolor =  mysqli_query($con,"insert into color(nomcolor) values('$color');");
								}
								
		$sqlpre = mysqli_query($con,"select * from precios where valores='$precio'");
		$sqlprecio = mysqli_num_rows($sqlpre);
		if($sqlprecio == 0){					
		$consultaprecio =  mysqli_query($con,"insert into precios(valores) values('$precio');");
							}
		
			
			header('location:principal.php?pag=agregarautos/consulta.php');
			
	?>

</body>
</html>