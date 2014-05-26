<?php
	echo"<h2>Aquí puedes iniciar tu sesión.</h2>";
	echo $this->Form->create();
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	echo $this->Form->end('Entrar');
	
	echo  "<h2>Aún no tines una cuenta, puedes crear tu cuenta ahora. </h2>";
		
	echo "<a class='boton_crear_cuenta' href='/users/registrar'>Crear una cuenta</a>";