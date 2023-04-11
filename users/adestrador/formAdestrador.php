<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<title> Cadastro Adestrador</title>

</head>

<body>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<h2> Cadastro Adestrador </h2>
	<form action="./cadastrarAdestrador.php" method="POST">

		<h3> Dados Pessoias </h3>

		<label for="name">CPF</label>
		<input type="text" name="CPF_adestrador" id="CPF_adestrador" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"><br>
		<script>
	function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
	}
	</script>

		<label for="name">Nome</label>
		<input type="text" name="nome_adestrador" id="nome_adestrador" placeholder="Digite seu nome" required><br>

		<label for="name">Nº de Telefone</label>
		<input type="text" name="fone_adestrador" id="fone_adestrador" maxlength="15" OnKeyPress="formatar('## #####-####', this)"><br>
		<script>
			function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
		</script>

		<label for="name">E-mail</label>
		<input type="text" name="email_adestrador" id="email_adestrador" placeholder="nickname@provedor.com" required><br>

		<label for="name">Senha</label>
		<input type="text" name="senha_adestrador" id="senha_adestrador" placeholder="Crie uma senha" required><br>

		<label for="name">Confirmar Senha</label>
		<input type="text" name="nome" id="senha_adestrador" placeholder="Confirme a senha" required><br>
		<input type="submit" value="Próximo" name="Cadastrar">


		</div>
		<br>

		<h3> Serviços prestado</h3>

		<h5>Quai tipo de animais poderá cuidar? </h5>

		<input type="checkbox" name="cao" value="Cachorro">
		<label for="cao">Cachorro</label>

		<input type="checkbox" name="gato" value="Gato">
		<label for="gato">Gatos</label>

		<label>Outro</label>
		<input type="text" name="outro" placeholder="Digite quais outros animais você poderá cuidar">

		<input type="submit" value="Próximo" name="Cadastrar">

		<h5> Qual(is) porte você poderá cuidar? </h5>

		<input type="checkbox" name="pequeno" value="pequeno">
		<label for="pequeno">Pequeno Porte </label>

		<input type="checkbox" name="medio" value="medio">
		<label for="medio">Médio Porte</label>

		<input type="checkbox" name="grande" value="grande">
		<label for="grande">Grande Porte</label>
		<input type="submit" value="Próximo" name="Cadastrar">

		<h2>formacao</h2>

	<label for="curso">Curso:</label>
	<input type="text" id="nomeCurso" name="nomeCurso" required><br>

	<label for="instituicao">Instituição:</label>
	<input type="text" id="instituicao" name="instituicao" required><br>

	<label for="data_inicio">Data de Início:</label>
	<input type="date" id="dt_inicio" name="dt_inicio" required><br>

	<label for="data_termino">Data de Término:</label>
	<input type="date" id="dt_termino" name="dt_termino" required><br>

	<label for="certificado">certificado de término</label>
	<input type="file" id="certificado" name="certificado">"
	<input type="submit" value="Enviar">
</form>

		</div>
		</div>
		</div>
		</div>

		<!-- Endereço
 -->
		
		<!-- FOTOS
<?php //if (msg != false) echo "<p> msg </p>";?>
<form action="./guardarFotos.php" method="POST" enctype="multipart/form-data">
<label> Enviar foto de perfil </label>
<input type="file" required name="foto">
<input type="submit" class="button" value="Enviar" >
</form alt="Second slide">
</div>-->

</body>

</html>