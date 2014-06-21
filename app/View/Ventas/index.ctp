<div style="text-align:center">
	<a class='titulos'>Página de Ventas</a>
</div>
<a class='botones_izquierdos3' href="/users/principal">Voler al Menú</a>
<br>

<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Venta',
		'Descripción',
		'Cantidad en Bodega',
		'Cantidad en Fabrica',
		'Precio',
		'Costo',
		'Emision de Venta',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $c){
		$tabla[]= array(
			$this->Html->link($c['Modelo']['nombre'],'/ventas/ver/'.$c['Venta']['id']),
			$c['Modelo']['descripcion'],
			$c['Modelo']['cantidad_en_bodega'],
			$c['Modelo']['cantidad_en_fabrica'],
			$c['Modelo']['precio'],
			$c['Modelo']['costo'],
			$c['Venta']['created'],
			$this->Html->link('[Editar]','/ventas/editar/'.$c['Venta']['id']).' '.
			$this->Html->link('[Borrar]','/ventas/borrar/'.$c['Venta']['id'],array(),
			'¿Estas seguro de querer borrar "'.$c['Modelo']['nombre'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	//debug($data);
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/ventas/registrar">Registrar nueva Venta</a>