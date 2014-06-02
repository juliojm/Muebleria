<?php
//debug($data);
	echo  "Nombre : ",$data["Material"]["nombre"],"<br/>";
	echo  "Costo: ",$data["Material"]["costo"],"<br/>";
	echo $this->Html->link('/materials/borrar/'.$data['id'],array(),'¿Estas seguro de querer borrar "'.$data['nombre'].'"?'),