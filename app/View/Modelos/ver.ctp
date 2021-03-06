﻿<a class='botones_izquierdos4' href="/modelos/">Volver a Modelos</a>
<h2>Datos del Modelo.</h2>
<br></br>

<?php
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
	
	echo "<br>";
	echo "<h2>Lista de consumibles</h2><table border=1>";
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
	
	echo "<br/><a class=boton_crear_nueva_cuenta href='/modelos/eliminar/".$data['Modelo']['id']."'>Borrar todo el Modelo</a></div>";

	echo "<h2>Imagnes de este modelo.</h2>";
	
	
	foreach($data["Archivo"] as $p){
		echo "<img height=150 style='margin:3px; padding:5px 20px; border:5px; 'src='/img/archivos/".$p["nombre_archivo"]."' />
		<div class = 'borrar'><a class=boton_crear_nueva_cuenta href='/archivos/borrar/".$p['id']."'>Borrar Archivo</a></div><hr>";
		}
