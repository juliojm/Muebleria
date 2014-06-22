<?php
	echo"<h1>Aquí registras un Tipo de Mueble.</h1>";
	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->end('Registrar');