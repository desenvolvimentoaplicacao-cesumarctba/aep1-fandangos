<?php
	include_once("Usuario.php");

	class Cliente extends Usuario{

		function __construct($n, $s, $ni = 1){
			$this->nomeUsuario = $n;
			$this->senha = $s;
			$this->nivelAcesso = $ni;
		}
	}