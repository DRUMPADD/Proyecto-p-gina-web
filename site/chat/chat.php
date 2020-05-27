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