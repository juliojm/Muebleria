<?php
	echo "<h2>Edita aquí este Proveedor.</h2>";
		echo $this->Form->create();
		echo $this->Form->input('nombre', array('default'=>$data['Supplier']['nombre']));
		echo $this->Form->input('telefono',array('default'=>$data['Supplier']['telefono']));
		echo $this->Form->input('email',array('default'=>$data['Supplier']['email']));
		echo $this->Form->input('contacto',array('default'=>$data['Supplier']['contacto']));
		echo $this->Form->end('Editar');