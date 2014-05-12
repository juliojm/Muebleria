<?php
	echo $this->Form->create();
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	echo $this->Form->end('Entrar');
	
	echo  "<h2>Aún no tines una cuenta, puedes crear tu cuenta ahora. </h2>";
		
		foreach($data as $link){
	
		$d=explode('|',$link);
		printf("<a class='boton_crear_cuenta' href='%s'>%s</a>",$d[1],$d[0]);
		}