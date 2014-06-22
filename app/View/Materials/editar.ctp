<?php
	echo "<h2>Edita aquí este Material.</h2>";
		echo $this->Form->create();
		echo $this->Form->input('nombre', array('default'=>$data['Material']['nombre']));
		echo $this->Form->input('costo',array('default'=>$data['Material']['costo']));
		echo $this->Form->end('Editar');