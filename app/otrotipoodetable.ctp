﻿<table style='border-collapse:collapse;' border=2 width=80%>
<tr>
	<th>Nombre de Usuario</th>
	<th>Username</th>
	<th>Acciones</th>
</tr>
<?php

foreach ($data as $usuario ){
	printf('<tr>
		<td><a href="/users/ver/%s">%s</a></td>
		<td>%s</td>
		<td><a href="/users/borrar/%s">[Borrar]</a> <a href="/users/editar/%s">[Modificar]</a> </td>
	</tr>', 
	$usuario['User']['id'], 
	$usuario['User']['name'], 
	$usuario['User']['username'],
	$usuario['User']['id'], 
	$usuario['User']['id']
	);
}



?>
</table>