<?php
if ($cursos) { 
	foreach ($cursos->result() as $curso) { ?>
    <ul>
    <li><a href="<?=$curso->idcurso;?>"><?=$curso->nombrecursos;?></a></li>    
    </ul>
 <?php } 
 } else {
 	echo "<p>error en la aplicacion no hay datos</p>";
 }
 ?>
</body>
</html>