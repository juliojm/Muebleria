<a class='botones_izquierdos4' href="/consumibles/">Volver a Consumibles</a>
<?php
//debug($data);
	echo"<h2>Información Consumible.</h2>";
	echo  "Material: ",$data["Material"]["nombre"],"<br/>";
	echo  "Modelo: ",$data["Modelo"]["nombre"],"<br/>";
	echo  "Cantidad : ",$data["Consumible"]["cantidad"],"<br/>";
		
	echo $this->Html->link('[Borrar]','/consumibles/borrar/'.$data['Consumible']['id'],array(),'¿Estas seguro de querer borrar "'.$data['Material']['nombre'].'"?');