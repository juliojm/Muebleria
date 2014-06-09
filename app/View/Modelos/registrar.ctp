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
	echo $this->Form->end('Agregar Modelo');