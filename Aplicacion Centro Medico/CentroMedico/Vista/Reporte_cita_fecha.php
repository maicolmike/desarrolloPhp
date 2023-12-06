<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Citas por fechas </title>
</head>

<body>

	<h1 style="text-align:center;"> CITAS POR FECHA </h1>

	<form action="Reportes/pdf/pdf_citas_fecha.php" method="post" target="_blank">
    
    	<table align="center" width="352" border="1">
          <tr>
            
            <td width="156">Fecha Inicial</td>
            <td width="180"><input type="date" name="inicial" /></td>
            
          </tr>
          <tr>
            
            <td>Fecha Final</td>
            <td><input type="date" name="final" /></td>
            
          </tr>
          <tr>
          
                <td style="text-align:center;"><input type="submit" value="GenererPDF" ></td>
                <td style="text-align:center;"><input type="reset" value="Cancelar"></td>
         
          </tr>
		</table>

         
</form>

</body>
</html>