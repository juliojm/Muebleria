<a class='botones_izquierdos4' href="/materials/">Volver a Materiales</a>
<?php
//debug($data);
	echo"<h2>Información Material.</h2>";
	echo  "Nombre : ",$data["Material"]["nombre"],"<br/>";
	echo  "Costo: ",$data["Material"]["costo"],"<br/>";
	echo $this->Html->link('[Borrar]','/materials/borrar/'.$data['Material']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Material']['nombre'].'"?');