<?php
		if(!$data==Null){
		if ($data['User']['id']<0){
			echo "<div class='loguear'><a class='logueo' href='/login'>Inicia Sesión</a></div>";
		}else{
			echo "<div class='loguear'><a class='logueo' href='/logout'>Cierra Sesión</a></div>";
		}
	}
	else{
		echo "<div class='loguear'><a class='logueo' href='/login'>Inicia Sesión</a></div>";
	}
	