<?php
//debug($data);
	echo  "Nombre Usuario: ",$data["User"]["name"],"<br/>";
	echo  "Username: ",$data["User"]["username"],"<br/>";
	
	echo $this->Html->link('[Borrar]','/users/borrar/'.$data['User']['id'],array(),'¿Estas seguro de querer borrar "'.$data['User']['name'].'"?');