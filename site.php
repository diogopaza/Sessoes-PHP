<?php

	session_start();
	if( !isset($_SESSION['login']) and !isset( $_SESSION['password']) ){

		header('location:index.php');
	}

	$logado = $_SESSION['login'];


	echo 'Estou logado no site com o usuário ' . $logado;



?>