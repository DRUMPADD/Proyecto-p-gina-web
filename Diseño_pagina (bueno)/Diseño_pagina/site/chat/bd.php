<?php  
	
	$servidor = "localhost";
	$usuario = "root";
	$pass = "";
	$base_d = "bd_aplicacion";

	$conexion = new mysqli($servidor,$usuario,$pass,$base_d);

	function formatear_fecha($fecha){
		return date('g:i a',strtotime($fecha));
	}
 
	if(isset($_POST['enviar'])){
		$nombre = $_POST['nombre'];
		$mensaje = $_POST['mensaje'];

		$consulta = "INSERT INTO chat (Matricula,mensaje) values ('$nombre','$mensaje')";
		$ejecutar = $conexion->query($consulta);

		if($ejecutar){
			echo "<embed loop= 'false' src = 'beep.mp3' hidden='true' autoplay='true'>";
		}
	}
?>