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
		echo $this->Html->script('jquery-1.11.1');
		echo $this->fetch('script');
	?>
</head>
<body>



	<div id="contenedor">
	   
		<div id="encabezado">
			<div id="Letras">Sistema Mueblería</div>
			<div id="menu">
				<div class="Boton" id=logear>Boton1</div>
				<div class="Boton">Boton2</div>
				<div class="Boton" id=fechahora></div>	
			</div>
			<div style="float:none;clear:both"> </div>
			
			
		</div>
		
		<div id ="espacio">
		
			
				<?php echo $this->Session->Flash();?>
				<?php echo $this->fetch('content'); ?>
		
		</div>
	
	</div>
	<script>
		$.get('/users/logear',function(data){
		
			$('#logear').html(data)
		
		});
	</script>

	<script C:\GitHub\Muebleria\app\webroot\js\jquery-1.11.1.js>

		var mydate=new Date()
		var year=mydate.getYear()
		if (year < 1000)
		year+=1900
		var day=mydate.getDay()
		var month=mydate.getMonth()
		var daym=mydate.getDate()
		if (daym<10)
		daym="0"+daym
		var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado")
		var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
		document.write("<small><font color='000000' face='Arial'>"+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"</font></small>")

	</script>


	
</body>
</html>
