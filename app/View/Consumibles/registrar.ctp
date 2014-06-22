<?php
	echo"<h1>Aquí registras tu Consumible.</h1>";
	echo $this->Form->create();
	echo $this->Form->input('material_id',array('options'=>$lstMateriales));
	echo $this->Form->input('modelo_id',array('options'=>$lstModelos));
	echo $this->Form->input('cantidad');
	echo $this->Form->end('Registar');