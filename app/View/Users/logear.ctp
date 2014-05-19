<?php
		if(!$data==Null){
		if ($data['User']['id']<0){
			echo "<a href='/users/login'>Inicia Sesión</a>";
		}else{
			echo "<a href='/users/logout'>Cierra Sesión</a>";
		}
	}
	else{
		echo "<a href='/users/login'>Inicia Sesión</a>";
	}
	