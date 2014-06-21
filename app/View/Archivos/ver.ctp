<?php
	//debug($data);
	
	foreach($data["Archivo"] as $p){
		echo "<img height=200 style='margin:5px;' src='/img/archivos/".$p["nombre_archivo"]."' />
		<div class = 'borrar'><a href='/archivos/borrar/".$p['id']."'>Borrar Documento</a></div><hr>";
	}
	
	
	echo "<h2>Estos son  los Documentos</h2>";
	echo  "Documento: ", $data["Archivo"]["nombre_archivo"],"<br/>";
	
	
	
	if($enlace=="si")
	//echo $this->Html->link('Subir una foto',"/fotos/agregar/".$data['Producto']['id']).'<br/><br/>';
	
	
	foreach($data["Foto"] as $p){
		echo "<img height=200 style='margin:5px;' src='/img/fotos/".$p["archivo"]."' />
		<div class = 'borrar'><a class=vermasinformacion href='/fotos/borrar/".$p['id']."'>Borrar Foto</a></div><hr>";
	}