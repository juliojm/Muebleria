<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Material',
		'Modelos',
		'Cantidad',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $c){
		$tabla[]= array(
			$this->Html->link($c['Material']['nombre'],'/consumibles/ver/'.$c['Consumible']['id']),
			$c['Modelo']['nombre'],
			$c['Consumible']['cantidad'],
			$this->Html->link('[Editar]','/consumibles/editar/'.$c['Consumible']['id']).' '.
			$this->Html->link('[Borrar]','/consumibles/borrar/'.$c['Consumible']['id'],array(),
			'¿Estas seguro de querer borrar "'.$c['Material']['nombre'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	//debug($data);
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/consumibles/registrar">Registrar nuevo Consumible</a>
	
	