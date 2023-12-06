<?php
//session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
//Creamos el objeto Paciente

$objPaciente= new Paciente();
$Paciente=$objPaciente->consultarPaciente($identificacion);
$resultado = $Paciente->fetch_object();

?>
   
    
    <form id="form1" name="form1" method="post" action="../Controlador/validarActualizarPaciente.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">MODIFICAR PACIENTE</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" value="<?php echo $resultado->pacIdentificacion;?>" type="text" id="identificacion" size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input name="nombres" value="<?php echo $resultado->pacNombres;?>" type="text" id="nombres" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input name="apellidos" value="<?php echo $resultado->pacApellidos;?>" type="text" id="apellidos" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Fecha Nacimiento</td>
          <td><input name="fechaNacimiento" value="<?php echo $resultado->pacFechaNacimiento;?>" type="date" id="fechaNacimiento" style="width:270px" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Sexo</td>
          <td><label for="sexo"></label>
            <select name="sexo" id="sexo" style="width:270px">
               <option value="<?php echo $resultado->pacSexo;?>"><?php echo $resultado->pacSexo;?></option>	
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
          </select></td>
        </tr>
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Paciente Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Paciente, favor Revisar';

?>