﻿<?php
	$modelo = "Nombre: {nombre}<br>
	Descripcion: {descripcion}<br>
	Cantidad en bodega: {cantidad_en_bodega}<br>
	Cantidad en fabrica: {cantidad_en_fabrica}<br>
	Precio:{precio}<br>
	Costo:{costo}<br>
	Tipo:{tipo}<br>
	";
	
	$consumible="<tr>
		<td>{material}</td>
		<td>{cantidad}</td>
	</tr>";

	$proveedor="<tr>
		<td>{nombre}</td>
		<td>{telefono}</td>
		<td>{email}</td>
		<td>{contacto}</td>
	</tr>";

	echo plantilla($modelo,array(
		'nombre'				=>$data['Modelo']['nombre'],
		'descripcion'			=>$data['Modelo']['descripcion'],
		'cantidad_en_bodega'	=>$data['Modelo']['cantidad_en_bodega'],
		'cantidad_en_fabrica'	=>$data['Modelo']['cantidad_en_fabrica'],
		'precio'				=>$data['Modelo']['precio'],
		'costo'					=>$data['Modelo']['costo'],
		'tipo'					=>$data['Tipo']['nombre'],
	));
	
	echo "<h1>Lista de consumibles</h1><table border=1>";
	foreach($data['Consumible'] as $c){
		echo plantilla($consumible,array(
			'material'=>$c['Material']['nombre'],
			'cantidad'=>$c['cantidad'],
		));
		echo "<tr><td>Lista de proveedores</td><td><table border=1>";
		foreach($c['Material']['Supplier'] as $s){
			echo plantilla($proveedor,array(
				'nombre'	=>	$s['nombre'],
				'telefono'	=>	$s['telefono'],
				'email'		=>	$s['email'],
				'contacto'	=>	$s['contacto'],
			));
		}
		echo "</table></td></tr>";
	}
	echo "</table>";
	
	echo '<a href="/modelos/eliminar/'.$data["Modelo"]["id"].'">Borrar Modelo</a>';
