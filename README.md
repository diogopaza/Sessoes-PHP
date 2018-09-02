<h1> Sessões com PHP</h1>

<p> Sessões são muito úteis em PHP ou em qualuqer outra linguagem WEB.
		Com sessões é possível autenticar um usuário para ele ter acesso a recursos do sistema(site)
		e impedir que certas páginas sejam acessadas por usuários não autorizados.
		Este artigo implementa uma tela de login que enviára informações para o servidor,
		caso essas informações sejam válidas ele terá acesso a página inicial, caso estejam incorretas
		o usuário deverá receber uma mensagem de login inválido.	

</p>
<h3>Exemplo de Login com PHP</h3>

//arquivo index.php<br>
//O arquivo index.php terá um simples formulário e que quando clicado no botao logar
irá para inicio.php


		<form method='post' action='inicio.php' id='formLogin' name='formLogin'>
			<fieldset id='field'>
				<legend>Login</legend>
					<label>Nome:</label>
					<input type='text' name='login' id='login'><br />
					<label>Senha:</label>
					<input type='password' name='password' id='senha'><br>
					<input type='submit' value='Logar'>
			</fieldset>


		</form>

//Arquivo inicio.php terá a função de receber os dados de login via POST. Também cria uma conexão com o banco de dados.
É feita uma consulta no banco verificando se os dados recebidos são de um usuário existente.
Com o metódo 'rowCount' é possível saber se alguma linha foi retornada indicado que o usuário existe no banco de dados, o 'if'
é usado para comparar e caso o número de usuários seja igual ou maior que um a sessão será criada, e com o metódo header o usuário é redirecionado 
para site.php, caso não existe esse usuário ele retorna para a página de login.
 
 
	
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

		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;

		header('location:site.php');
	}else{

		header('location:index.php', true, 302);
	}


	




