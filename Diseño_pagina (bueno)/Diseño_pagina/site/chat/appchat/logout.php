<?
session_start();
include "config.php";
if(isset($_SESSION['user'])){
	session_destroy();
	header("Location: login.php");
}else{
	echo "Error!";
}
?>