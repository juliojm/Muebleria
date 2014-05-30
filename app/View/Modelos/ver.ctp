<?php
	
	echo  "Nombre: ",$data["Modelo"]["nombre"],"<br/>";
	echo  "Descripción: ",$data["Modelo"]["descripcion"],"<br/>";
	echo  "Cantidad en bodega: ",$data["Modelo"]["cantidad_en_bodega"],"<br/>";
	echo  "Cantidad en fábrica: ",$data["Modelo"]["cantidad_en_fabrica"],"<br/>";
	echo  "Precio: ",$data["Modelo"]["precio"],"<br/>";
	echo  "Costo: ",$data["Modelo"]["costo"],"<br/>";
	
	$c=$data['Consumible'];
	echo "<h1>Los consumibles para este modelo son los siguientes</h1>" ;
	echo  "Nombre: ",$c[0]["Material"]["nombre"]."<br/>";
	echo  "Costo: ",$c[0]["Material"]["costo"]."<br/>";
	echo  "Cantidad: ",$c[0]["cantidad"]."<br/>";
	
	echo "<h1>Los proveedores para este modelo son los siguientes</h1>" ;
	foreach($data["Consumible"]["0"]["Material"]["Supplier"] as $s){
		echo  "Nombre: ",$s["nombre"]."<br/>";
	}
	debug($data);
	
	
	