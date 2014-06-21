<div style="text-align:center">
	<a class='titulos'>Página de Compras</a>
</div>
<a class='botones_izquierdos2' href="/modelos/">Ir a Modelos</a>
<a class='botones_izquierdos3' href="/users/principal">Voler al Menú</a>
<br>

<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Piezas',
		'Monto de la compra',
		'Material',
		'Costo',
		'Emision Compra',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $c){
		$tabla[]= array(
			$this->Html->link($c['Compra']['piezas'],'/compras/ver/'.$c['Compra']['id']),
			$c['Compra']['monto_compra'],
			$c['Material']['nombre'],
			$c['Material']['costo'],
			$c['Compra']['created'],
			$this->Html->link('[Editar]','/compras/editar/'.$c['Compra']['id']).' '.
			$this->Html->link('[Borrar]','/compras/borrar/'.$c['Compra']['id'],array(),
			'¿Estas seguro de querer borrar "'.$c['Compra']['piezas'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	//debug($data);
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/compras/registrar">Registrar nueva Compra</a>
	