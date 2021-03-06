﻿<div style="text-align:center">
	<a class='titulos'>Página de Proveedores</a>
</div>
<a class='botones_izquierdos3' href="/users/principal">Voler al Menú</a>
<a class='botones_izquierdos2' href="/compras/">Hacer una Compra</a>
<br>

<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Nombre',
		'Teléfono',
		'Email',
		'Contacto',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $s){
		$s = $s['Supplier'];
		$tabla[]= array(
			$this->Html->link($s['nombre'],'/suppliers/ver/'.$s['id']),
			$s['telefono'],
			$this->Html->link($s['email'],'mailto:'.$s['email']),
			$s['contacto'],
			$this->Html->link('[Editar]','/suppliers/editar/'.$s['id']).' '.$this->Html->link('[Borrar]','/suppliers/borrar/'.$s['id'],array(),'¿Estas seguro de querer borrar "'.$s['nombre'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/suppliers/registrar">Registrar nuevo proveedor</a>