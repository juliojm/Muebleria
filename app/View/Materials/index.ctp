﻿<div style="text-align:center">
	<a class='titulos'>Página de Materiales</a>
</div>
<a class='botones_izquierdos2' href="/modelos/">Ir a Consumibles</a>
<a class='botones_izquierdos2' href="/modelos/">Ir a Modelos</a>
<a class='botones_izquierdos3' href="/users/principal">Voler al Menú</a>
<br>
<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Nombre',
		'Costo',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $m){
		$m = $m['Material'];
		$tabla[]= array(
			$this->Html->link($m['nombre'],'/materials/ver/'.$m['id']),
			$m['costo'],
			$this->Html->link('[Editar]','/materials/editar/'.$m['id']).' '.$this->Html->link('[Borrar]','/materials/borrar/'.$m['id'],array(),'¿Estas seguro de querer borrar "'.$m['nombre'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/materials/registrar">Pide otro Material</a>