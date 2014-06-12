<?php

		echo "<h2>Edita aquí una compra.</h2>";
		echo $this->Form->create();
			
		echo $this->Form->input('material_id',array('options'=>$lstMateriales));
		
		echo $this->Form->input('cantidad',array('default'=>$data['Consumible']['cantidad']));
		echo $this->Form->end('Editar');