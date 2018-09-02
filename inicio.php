<?php

	//inicia sessão
	session_start();

	//pega os dados digitados pelo usuário ao preencher o formulário
	$login= $_POST['login'];
	$password= $_POST['password'];

	//conectar ao banco de dados
	$con = new PDO("mysql:host=localhost;dbname=server;charset=utf8","root","");

	$sql = "SELECT * FROM users WHERE user='" . $login . "' AND password='". $password .  "'";
	
	$query = $con->query($sql);

	if($query->rowCount() > 0 ){

		$SESSION['login'] = $login;
		$SESSION['password'] = $password;

		header('location:site.php');
	}


	echo 'Registros encontrados: '. $query->rowCount();




?>