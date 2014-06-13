<?php
		
		echo "<h2>Edita aquí una venta.</h2>";
		echo $this->Form->create();	
		echo $this->Form->input('modelo_id',array('options'=>$lstModelos));
		echo $this->Form->end('Editar');
		
		//debug($data);