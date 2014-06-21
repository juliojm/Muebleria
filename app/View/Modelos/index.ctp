<div style="text-align:center">
	<a class='titulos'>Página de Modelos</a>
</div>
<a class='botones_izquierdos2' href="/materials/">Materiales Disponibles</a>
<a class='botones_izquierdos2' href="/tipos/">Tipos Disponibles</a>
<a class='botones_izquierdos2' href="/consumibles/">Consumibles Existentes</a>
<br>

<table style='border-collapse:collapse;' border=2 width=80%>
<tr>
	<th>Nombre del modelo</th>
	<th>Descripción</th>
	<th>Cantidad en fábrica</th>
	<th>Cantidad en bodega</th>
	<th>Precio</th>
	<th>Costo</th>
	<th>Acciones</th>
</tr>
<?php

foreach ($data as $modelo ){
	printf('<tr>
		<td><a href="/modelos/ver/%s">%s</a></td>
		<td>%s</td>
		<td>%s</td>
		<td>%s</td>
		<td>%s</td>
		<td>%s</td>
		<td><a href="/modelos/eliminar/%s">[Eliminar]</a> <a href="/modelos/editar/%s">[Editar]</a> </td>
	</tr>', 
	$modelo['Modelo']['id'], 
	$modelo['Modelo']['nombre'], 
	$modelo['Modelo']['descripcion'],
	$modelo['Modelo']['cantidad_en_fabrica'],
	$modelo['Modelo']['cantidad_en_bodega'],
	$modelo['Modelo']['precio'],
	$modelo['Modelo']['costo'],
	$modelo['Modelo']['id'],
	$modelo['Modelo']['id']
	
	);
}



?>
</table>
</br>
<a class='boton_crear_nueva_cuenta' href="/modelos/registrar">Agregar nuevo modelo</a>
	
	