<?php

	echo "<h2>Editar Modelo</h2>";
		echo $this->Form->create();
		echo $this->Form->input('nombre', array('default'=>$data['Modelo']['nombre']));
		echo $this->Form->input('descripcion',array('default'=>$data['Modelo']['descripcion']));
		echo $this->Form->input('antidad_en_fabrica',array('default'=>$data['Modelo']['cantidad_en_fabrica']));
		echo $this->Form->input('cantidad_en_bodega',array('default'=>$data['Modelo']['cantidad_en_bodega']));
		echo $this->Form->input('precio',array('default'=>$data['Modelo']['precio']));
		echo $this->Form->input('costo',array('default'=>$data['Modelo']['costo']));
		echo $this->Form->end('Editar');
	