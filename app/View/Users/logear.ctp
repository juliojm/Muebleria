<?php
		if(!$data==Null){
		if ($data['User']['id']<0){
			echo "<div class='loguear'><a class='logueo' href='/users/login'>Inicia Sesión</a></div>";
		}else{
			echo "<div class='loguear'><a class='logueo' href='/users/logout'>Cierra Sesión</a></div>";
		}
	}
	else{
		echo "<div class='loguear'><a class='logueo' href='/users/login'>Inicia Sesión</a></div>";
	}
	