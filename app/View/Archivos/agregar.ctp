<?php
	
	echo $this->Form->create('Archivo', array('type' => 'file'));
	echo $this->Form->input('archivo',array('type'=>'file'));
	echo $this->Form->input('modelo_id',array('type'=>'hidden','default'=>$id));
	echo $this->Form->end('Agregar Archivo');
	