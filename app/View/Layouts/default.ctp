<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('default');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>



	<div id="contenedor">
	   
		<div id="encabezado">
			<div id="Letras">Sistema Mueblería</div>
			<div id="menu">
				<div class="Boton">Boton1</div>
				<div class="Boton">Boton2</div>
				<div class="Boton">Boton3</div>	
			</div>
			<div style="float:none;clear:both"> </div>
			
			
		</div>
		
		<div id ="espacio">
	
				<?php echo $this->fetch('content'); ?>
		
		</div>
	
	</div>
	
</body>
</html>
