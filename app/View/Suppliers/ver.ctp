<a class='botones_izquierdos4' href="/suppliers/">Volver a Proveedores</a>
<?php
//debug($data);
	echo"<h2>Información Proveedor.</h2>";
	echo  "Nombre : ",$data["Supplier"]["nombre"],"<br/>";
	echo  "Telefono: ",$data["Supplier"]["telefono"],"<br/>";
	echo  "Email : ",$data["Supplier"]["email"],"<br/>";
	echo  "Contacto : ",$data["Supplier"]["contacto"],"<br/>";
	
	echo $this->Html->link('[Borrar]','/suppliers/borrar/'.$data['Supplier']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Supplier']['nombre'].'"?');