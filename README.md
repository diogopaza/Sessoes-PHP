<h1> Sessões com PHP</h1>

<p> Sessões são muito úteis em PHP ou em qualuqer outra linguagem WEB.
		Com sessões é possível autenticar um usuário para ele ter acesso a recursos do sistema(site)
		e impedir que certas páginas sejam acessadas por usuários não autorizados.
		Este artigo implementa uma tela de login que enviára informações para o servidor,
		caso essas informações sejam válidas ele terá acesso a página inicial, caso estejam incorretas
		o usuário deverá receber uma mensagem de login inválido.	

</p>
<h3>Exemplo de Login com PHP</h3>

//arquivo index.php
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
	




