<?php
	echo"<h2>Aquí emites una Compra.</h2>";
	echo $this->Form->create();
	echo $this->Form->input('piezas');
	echo $this->Form->input('monto_compra');
	echo $this->Form->input('material_id',array('options'=>$lstMateriales));
	echo $this->Form->end('Emitir');