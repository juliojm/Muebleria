<?php
//debug($data);
	echo  "Venta: ",$data["Modelo"]["nombre"],"<br/>";
	echo  "Descripcion: ",$data["Modelo"]["descripcion"],"<br/>";
	echo  "Costo: ",$data["Modelo"]["costo"],"<br/>";
	echo  "Emisión: ",$data["Venta"]["created"],"<br/>";
		
	echo $this->Html->link('[Borrar]','/ventas/borrar/'.$data['Venta']['id'],array(),'¿Estas seguro de querer borrar esta venta "'.$data['Modelo']['nombre'].'"?');