function validar()
	
	{
	if (form1.nombre.value=="")
		{
		 alert ("Debe escribir el Nombre y Apellido");
		form1.nombre.focus();
		 return  false;
		 }
		 if (form1.mensaje.value=="")
		{
		 alert ("Debe escribir el mensaje");
		form1.mensaje.focus();
		 return  false;
		 }
		
		else{
		
 	return true;
	  		}
		
	}	