<?php
	echo"<h1>Aquí registras un Material.</h1>";
	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->input('costo');
	echo $this->Form->end('Registar');