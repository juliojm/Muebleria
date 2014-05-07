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
			<div class="Boton"></div>
			<div class="Boton"></div>
			<div class="Boton"></div>	
		</div>
		
		<div id ="espacio">
	
				<?php echo $this->fetch('content'); ?>
		
		</div>
	
	</div>
	
</body>
</html>
