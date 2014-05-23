<?php
//debug($data);
	echo  "Nombre Usuario: ",$data["User"]["name"],"<br/>";
	echo  "Username: ",$data["User"]["username"],"<br/>";
	
	echo '<a href="/users/borrar/'.$data["User"]["id"].'">Borrar Usuario</a>';