<?=form_open("/cursos/actualizar/".$id) ?>	
<?php

if ($cursos) {

$nombre= array(
'name'=>'nombre','placeholder'=>'escribe tu nombre','value'=>$cursos->result()[0]->nombrecursos
);

$videos= array(
'name'=>'videos','placeholder'=>'escribe su video','value'=>$cursos->result()[0]->cantidadcursos
);

?>
    <?=form_label('nombre:','nombre')?>
	<?=form_input($nombre)?>
<br><br>

	<?=form_label('videos','videos')?>
	<?=form_input($videos)?>


<?=form_submit(' ','actualizar curso')?>
<?=form_close()?>
<?php
} else {
 	echo "<p>error en la aplicacion no hay informacion</p>";
 }
?>
</body>
</html>