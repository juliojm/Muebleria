<?php
	echo"<h1>Aquí emites una Compra.</h1>";
	echo $this->Form->create();
	echo $this->Form->input('piezas');
	echo $this->Form->input('monto_compra');
	echo $this->Form->input('material_id',array('options'=>$lstMateriales));
	echo $this->Form->input('created');
	echo $this->Form->end('Emitir');