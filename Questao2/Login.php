<?php
	include_once("Cliente.php");
	include_once("Admin.php");

	class Login{

		private $token;

		public function logar($user){
			if ($user->nomeUsuario == 'admin' && $user->senha == 'admin'){
				//criar tolken de adm
				setcookie('token', "adm", time()+300);
				header("Location: logado.php");
			}
			if ($user->nomeUsuario == 'cliente' && $user->senha == '1234' ){
				//criar tolken de adm
				setcookie('token', "cln", time()+300);
				header("location: logado.php");
			}
		header("location: logado.php");
		}
	}