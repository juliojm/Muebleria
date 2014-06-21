<?php


	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('cantidad_en_bodega');
	echo $this->Form->input('cantidad_en_fabrica');
	echo $this->Form->input('precio');
	echo $this->Form->input('costo');
	echo $this->Form->input('tipo_id',array(
		'options'=>$lstTipos
	));
?>
	<a class='boton_crear_nueva_cuenta' href="/tipos/registrar">Agrega un nuevo tipo</a>
<?php
	echo $this->Form->end('Agregar Modelo');
	
	