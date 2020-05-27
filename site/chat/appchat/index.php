<? 
	session_start();
	include "config.php";
	if(isset($_SESSION['user'])){
		?>
		<table width="800" height="500">
			<tr>
				<td><iframe src="mensajes.php" name="iframe" width="700" height="400"></iframe></td>
			</tr>
			<tr>
				<td><input type="text" size="90" name="mensaje"> <button type="submit" name="enviar">Enviar mensaje</button></td>
			</tr>
		</table> 
		<?
	case false:
		?>
		Inicia sesion para utilizar el chat <a href="login.php">Click aqui</a>
		<? 
	}
?>