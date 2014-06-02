<?php
	echo"<h2>Aquí registras un nuevo Supplier.</h2>";
	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->input('telefono');
	echo $this->Form->input('email');
	echo $this->Form->input('contacto');
	echo $this->Form->end('Registrar');