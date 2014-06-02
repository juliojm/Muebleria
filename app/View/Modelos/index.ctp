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
		<td><a href="/modelos/eliminar/%s">[Eliminar]</a> <a href="/modelos/editar/%s">[Modificar]</a> </td>
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
<a class='boton_crear_nueva_cuenta' href="/modelos/agregar">Agregar nuevo modelo</a>
	
	