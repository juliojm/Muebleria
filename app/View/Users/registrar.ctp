<?php
	echo"<h1>Aquí registras un Supplier.</h1>";
	echo $this->Form->create();
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');	
	echo $this->Form->end('Registrar');