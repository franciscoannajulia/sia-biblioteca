<?php

	$servidor = "localhost:3306";
	$bancodados = "siabiblioteca_1406";
	$datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
	$usuario = "root";
	$senha = "1234";
	
	$conexao = new PDO($datasource, $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

?>