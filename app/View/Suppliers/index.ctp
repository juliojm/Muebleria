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
	<a class='boton_crear_nuevo_supplier' href="/suppliers/registrar">Registrar nuevo supplier</a>