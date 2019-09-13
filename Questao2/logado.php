<?php
	include_once("Cliente.php");
	include_once("Admin.php");
	include_once("Login.php");

	if(!isset($_COOKIE["token"])){
		echo "voce não tem permissão";
		die();
	}else{
	switch ($_COOKIE["token"]) {
	 	case 'adm':
	 		echo "<h1>VOCE É DEUS!!!</h1>";
	 		break;
	 	case 'cln':
	 		echo "<h1>voce é apenas um cliente</h1>";
	 		break;
	 	
	 	default:
	 		echo "voce não tem permissão";
	 		break;
	 	}
	 }