<?php
//debug($data);
	echo  "id : ",$data["Consumible"]["material_id"],"<br/>";
	echo  "id: ",$data["Consumible"]["modelo_id"],"<br/>";
	echo  "Cantidad : ",$data["Consumible"]["cantidad"],"<br/>";
		
	echo $this->Html->link('[Borrar]','/consumibles/borrar/'.$data['Consumible']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Consumible']['cantidad'].'"?');