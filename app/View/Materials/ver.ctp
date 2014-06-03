<?php
//debug($data);
	echo  "Nombre : ",$data["Material"]["nombre"],"<br/>";
	echo  "Costo: ",$data["Material"]["costo"],"<br/>";
	echo $this->Html->link('[Borrar]','/materials/borrar/'.$data['Material']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Material']['nombre'].'"?');