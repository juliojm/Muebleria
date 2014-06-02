<?php
	echo"<h2>Aquí registras un Material.</h2>";
	echo $this->Form->create();
	echo $this->Form->input('nombre');
	echo $this->Form->input('costo');
	echo $this->Form->end('Registar');