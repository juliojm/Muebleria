<?php
//debug($data);
	echo  "Material: ",$data["Material"]["nombre"],"<br/>";
	echo  "Modelo: ",$data["Modelo"]["nombre"],"<br/>";
	echo  "Cantidad : ",$data["Consumible"]["cantidad"],"<br/>";
		
	echo $this->Html->link('[Borrar]','/consumibles/borrar/'.$data['Consumible']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Material']['nombre'].'"?');