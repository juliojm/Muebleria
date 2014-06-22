<a class='botones_izquierdos4' href="/users/">Volver a Usuarios</a>
<?php
//debug($data);
	echo"<h2>Informacion de este Usuario.</h2>";
	echo  "Nombre Usuario: ",$data["User"]["name"],"<br/>";
	echo  "Username: ",$data["User"]["username"],"<br/>";
	
	echo $this->Html->link('[Borrar]','/users/borrar/'.$data['User']['id'],array(),'¿Estas seguro de querer borrar "'.$data['User']['name'].'"?');