<?=form_open("/cursos/recibirdatos") ?>	
<?php
$nombre= array(
'name'=>'nombre','placeholder'=>'escribe tu nombre'
);

$videos= array(
'name'=>'videos','placeholder'=>'escribe su video'
);

?>
    <?=form_label('nombre:','nombre')?>
	<?=form_input($nombre)?>
<br><br>

	<?=form_label('videos','videos')?>
	<?=form_input($videos)?>


<?=form_submit(' ','subir curso')?>
<?=form_close()?>

</body>
</html>