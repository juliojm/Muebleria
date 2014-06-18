<div style="text-align:center">
	<a class='titulos'>Página Usuarios</a>
</div>
<br>
<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Nombre',
		'Username',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $u){
		$u = $u['User'];
		$tabla[]= array(
			$this->Html->link($u['name'],'/users/ver/'.$u['id']),
			$u['username'],
			$this->Html->link('[Editar]','/users/editar/'.$u['id']).' '.$this->Html->link('[Borrar]','/users/borrar/'.$u['id'],array(),'¿Estas seguro de querer borrar "'.$u['name'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	?>
</br>
<a class='boton_crear_nueva_cuenta' href="/users/registrar">Registrar nuevo usuario</a>