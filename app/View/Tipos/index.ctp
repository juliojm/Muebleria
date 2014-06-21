<div style="text-align:center">
	<a class='titulos'>Todos los tipos Actuales</a>
</div>
<a class='botones_izquierdos2' href="/modelos/">Volver a Modelos</a>
<br>
<table style='border-collapse:collapse;' border=2 width=80%>
<?php
	echo $this->Html->tableHeaders(array(
		'Nombre',
		'Acciones',
	));

	$tabla = array();
	
	foreach($data as $t){
		$t = $t['Tipo'];
		$tabla[]= array(
			$this->Html->link($t['nombre'],'/tipos/ver/'.$t['id']),
			$this->Html->link('[Editar]','/tipos/editar/'.$t['id']).' '.$this->Html->link('[Agregar imagen]','/archivos/agregar/'.$t['id']).' '.$this->Html->link('[Borrar]','/tipos/borrar/'.$t['id'],array(),'¿Estas seguro de querer borrar "'.$t['nombre'].'"?'),
		);
	}
	
	echo $this->Html->tableCells($tabla);
	
	echo "</table>";
	?>
	</br>
	<a class='boton_crear_nueva_cuenta' href="/tipos/registrar">Registra otro tipo de Mueble</a>