<?php
	include_once("Cliente.php");
	include_once("Admin.php");
	include_once("Login.php");

	setcookie("token", '', time()-1);
	$n = $_POST["n"];
	$s = $_POST["s"];
	$t = $_POST["t"];
	if ($t == 0){
		$admin = new Admin($n, $s);
		$lgn = new Login();
		$lgn->logar($admin);
	}else if ($t == 1){
		$lgn = new Login();
		$cln = new Cliente($n, $s);
		$lgn->logar($cln);
	}
	
	

