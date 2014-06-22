<a class='botones_izquierdos4' href="/tipos/">Volver a Tipos</a>
<?php
//debug($data);
	echo"<h2>Tipo Disponible.</h2>";
	echo  "Nombre : ",$data["Tipo"]["nombre"],"<br/>";
	echo $this->Html->link('[Borrar]','/tipos/borrar/'.$data['Tipo']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Tipo']['nombre'].'"?');