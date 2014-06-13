<?php
		
		echo "<h2>Edita aquí una compra.</h2>";
		echo $this->Form->create();	
		echo $this->Form->input('material_id',array('options'=>$lstMateriales));
		echo $this->Form->input('Material.costo', array('default'=>$data['Material']['costo']));
		echo $this->Form->input('piezas', array('default'=>$data['Compra']['piezas']));
		echo $this->Form->input('monto_compra',array('default'=>$data['Compra']['monto_compra']));
		echo $this->Form->end('Editar');
		//debug($data);
?>

<script>
	$("#CompraPiezas").change(function(){
		$("#CompraMontoCompra").val($("#CompraPiezas").val()*$("#MaterialCosto").val())
			
	});
</script>