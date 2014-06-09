<?php
	echo "<h2>Edita aquí el tipo de mueble.</h2>";
		echo $this->Form->create();
		echo $this->Form->input('nombre', array('default'=>$data['Tipo']['nombre']));
		echo $this->Form->end('Editar');
