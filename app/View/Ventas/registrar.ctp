<?php
	echo"<h1>Selecciona un modelo para vender.</h1>";
	echo $this->Form->create();
	echo $this->Form->input('modelo_id',array('options'=>$lstModelos));
	echo $this->Form->input('created');
	echo $this->Form->end('Vender');