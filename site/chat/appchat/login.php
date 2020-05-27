<?
session_start();
include "config.php";
if(isset($_SESSION['user']))
	?>Hola <? = $_SESSION['user'] ?> Ya has iniciado sesión <a href="logout.php">Cerrar sesión</a><?
else{
	?>
	<table width="300">
		<form method="POST" action="logeo.php">
	<tr>
	<td>User:</td>
	<td><input type="text" name="user"/></td>
	</tr>
	<tr>
	<td>Pass:</td>
	<td><input type="password" name="pass"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="enviar" value="Acceder"></td>
	</tr>
		</form>
	</table>
	<?
}
?>