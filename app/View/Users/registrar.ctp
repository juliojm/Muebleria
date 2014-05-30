<?php
	echo"<h2>Aquí registras un Supplier.</h2>";
	echo $this->Form->create();
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');	
	echo $this->Form->end('Registrar');