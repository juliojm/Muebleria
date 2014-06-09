<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Material_id',
		'Modelos_id',
		'Cantidad',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $c){
		$c = $c['Consumible'];
		$tabla[]= array(
			$this->Html->link($c['material_id'],'/consumibles/ver/'.$c['id']),
			$c['modelo_id'],
			$c['cantidad'],
			$this->Html->link('[Editar]','/consumibles/editar/'.$c['id']).' '.$this->Html->link('[Borrar]','/consumibles/borrar/'.$c['id'],array(),'¿Estas seguro de querer borrar "'.$c['cantidad'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/consumibles/registrar">Registrar nuevo Consumible</a>