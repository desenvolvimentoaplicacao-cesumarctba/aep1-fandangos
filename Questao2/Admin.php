<?php
	include_once("Usuario.php");

	class Admin extends Usuario{
			function __construct($n, $s, $ni = 0){
			$this->nomeUsuario = $n;
			$this->senha = $s;
			$this->nivelAcesso = $ni;
		}
	}