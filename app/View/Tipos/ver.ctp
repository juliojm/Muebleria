<?php
//debug($data);
	echo  "Nombre : ",$data["Tipo"]["nombre"],"<br/>";
	echo $this->Html->link('[Borrar]','/tipos/borrar/'.$data['Tipo']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Tipo']['nombre'].'"?');