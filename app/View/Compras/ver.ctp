<?php
debug($data);
	echo  "Piezas: ",$data["Compra"]["piezas"],"<br/>";
	echo  "Monto de la compra: ",$data["Compra"]["monto_compra"],"<br/>";
	echo  "Material : ",$data["Material"]["nombre"],"<br/>";
	echo  "Costo : ",$data["Material"]["costo"],"<br/>";

		
	echo $this->Html->link('[Borrar]','/compras/borrar/'.$data['Compra']['id'],array(),'¿Estas seguro de querer borrar la compra por "'.$data['Material']['nombre'].'"?');