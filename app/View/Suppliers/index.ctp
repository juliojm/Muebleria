<table border=1>
<tr>
	<th>Nombre</th>
	<th>Telefono</th>
	<th>Email</th>
	<th>Contacto</th>
</tr>
<?php

foreach ($data as $usuario ){
	printf('<tr>
		<td><a href="/suppliers/ver/%s">%s</a></td>
		<td>%s</td>
		<td><a href="/suppliers/borrar/%s">[Borrar]</a> <a href="/suppliers/editar/%s">[Modificar]</a> </td>
	</tr>', 
	$usuario['Supplier']['id'], 
	$usuario['Supplier']['nombre'], 
	$usuario['Supplier']['telefono'],
	$usuario['Supplier']['email'], 
	$usuario['Supplier']['contacto']
	);
}



?>
</table>
</br>
<a class='boton_crear_otro_supplier' href="/suppliers/registrar">Registrar nuevo Supplier</a>