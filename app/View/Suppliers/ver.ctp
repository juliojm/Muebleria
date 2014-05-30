<?php
//debug($data);
	echo  "Nombre : ",$data["Supplier"]["nombre"],"<br/>";
	echo  "Telefono: ",$data["Supplier"]["telefono"],"<br/>";
	echo  "Email : ",$data["Supplier"]["email"],"<br/>";
	echo  "Contacto : ",$data["Supplier"]["contacto"],"<br/>";
	
	echo '<a href="/suppliers/borrar/'.$data["Supplier"]["id"].'">Borrar Supplier</a>';