<?php
	echo"<h2>Aquí registras un Tipo de Mueble.</h2>";
	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->end('Registrar');