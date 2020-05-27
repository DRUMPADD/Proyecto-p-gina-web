<?php 
	include "bd.php";

 
			if(isset($_POST['enviar'])){
				$nombre = $_POST['nombre'];
				$mensaje = $_POST['mensaje'];

				$consulta = "INSERT INTO chat_mensajes (Nombre,mensaje) values ('$nombre','$mensaje')";
				$ejecutar = $conexion->query($consulta);

				if($ejecutar){
					echo "<embed loop= 'false' src = 'beep.mp3' hidden='true' autoplay='true'>";
				}
			}
			<?php 
	include "bd.php";
					$consulta = "SELECT * from chat_mensajes order by ID DESC";
					$ejecutar = $conexion->query($consulta);
					while($fila = $ejecutar->fetch_array()):			
				?>
				<div id="datos">
					<span style="color: orange;"><?php echo $fila['Nombre'] ?>:</span>
					<span style="color: gray;"><?php echo $fila['mensaje'] ?></span>
					<span style="float: right;"><?php echo formatear_fecha($fila['fecha']) ?></span>
				</div>
			<?php endwhile; ?>

?>
<!DOCTYPE html>
<html>
<head>
	<title>CHAT</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}	
			req.open('GET','chat.php',true);
			req.send();
		}

		setInterval(function(){ajax();},1000);

	</script>
</head>
<body onload="ajax();">
	<div id="contenedor">
		<div id="caja">
			<div id="chat">
				
			</div>
		</div>
		<form method="POST" action="index.php">
			<input type="text" name="Matricula" placeholder="Ingresa tu matricula">
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</div>
</body>
</html>