<?php
	echo "<h2>Edita aquí un Usuario.</h2>";
		echo $this->Form->create();
		echo $this->Form->input('name', array('default'=>$data['User']['name']));
		echo $this->Form->input('username',array('default'=>$data['User']['username']));
		echo $this->Form->end('Editar');
	
	