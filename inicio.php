<?php

	//inicia sessão
	session_start();

	//pega os dados digitados pelo usuário ao preencher o formulário
	$login= $_POST['login'];
	$password= $_POST['password'];

	//conectar ao banco de dados
	$con = new PDO("mysql:host=localhost;dbname=server;charset=utf8","root","");

	$sql = "SELECT * FROM users";
	$query = $con->query($sql);
	foreach ($query as $row) {
		echo $row['user'];
	}


	echo 'Registros encontrados: '. $query->rowCount();




?>