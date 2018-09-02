<?php

	//inicia sessão
	session_start();

	//pega os dados digitados pelo usuário ao preencher o formulário
	$login= $_POST['login'];
	$password= $_POST['password'];

	//conectar ao banco de dados
	$con = mysqli_connect('localhost','root','','server') or die('Sem conexão com o servidor');

	echo'conectado';




?>