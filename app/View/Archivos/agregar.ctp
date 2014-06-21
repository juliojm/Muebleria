<?php
	echo $this->Form->create('Fotos', array('type' => 'file'));
	echo $this->Form->input('archivo',array('type'=>'file'));
	echo $this->Form->end('Subir Foto');