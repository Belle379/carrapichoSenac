<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<title> Cadastro veterinario</title>

</head>

<body>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<h2> Cadastro veterinario </h2>
	<form action="./cadastrarveterinario.php" method="POST">

		<h3> Dados Pessoias </h3>

		<label for="name">CPF</label>
		<input type="text" name="CPF_veterinario" id="CPF_veterinario" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
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
		<input type="text" name="nome_veterinario" id="nome_veterinario" placeholder="Digite seu nome" required><br>

		<label for="name">CRMV</label>
		<input type="text" name="CRMV" id="CRMV" maxlength="6" OnKeyPress="formatar('#-####', this)">
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


		<label for="name">Nº de Telefone</label>
		<input type="text" name="fone_veterinario" id="fone_veterinario" maxlength="15" OnKeyPress="formatar('## #####-####', this)">

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
		<input type="text" name="email_veterinario" id="email_veterinario" placeholder="nickname@provedor.com" required><br>

		<label for="name">Senha</label>
		<input type="text" name="senha_veterinario" id="senha_veterinario" placeholder="Crie uma senha" required><br>

		<label for="name">Confirmar Senha</label>
		<input type="text" name="nome" id="senha_veterinario" placeholder="Confirme a senha" required><br>
		<input type="submit" value="Próximo" name="Cadastrar">


		</div>
		<br>
		<h2>Plantão</h2>

		<input type="radio" name="plantao" value="sim">
		<label for="plantao">Sim</label>
		<input type="radio" name="plantao" value="nao">
		<label for="plantao">nao</label>


		<input type="checkbox" name="consulta" value="consulta">
		<label for="consulta">consulta</label>

		<input type="checkbox" name="vacina" value="vacina">
		<label for="vacina">vacina</label>

		<input type="checkbox" name="exame" value="exame">
		<label for="exame">exame</label>

		<input type="checkbox" name="emergencia" value="emergencia">
		<label for="emergencia">emergencia</label>


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