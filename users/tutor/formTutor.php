<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<title> Cadastro dono</title>

</head>

<body>
	
	<h2> Cadastro Tutor </h2>
	<form action="./cadastrarTutor.php" method="POST">

		<h3> Dados Pessoias </h3>

		<label for="name">CPF</label>
		<input type="text" name="CPF_dono" id="CPF_dono" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="000.000.000-00"  required><br>
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
		<input type="text" name="nome_dono" id="nome_dono" placeholder="Digite seu nome" required><br>

		<label for="name">Nº de Telefone</label>
		<input type="text" name="fone_dono" id="fone_dono" maxlength="15" OnKeyPress="formatar('## #####-####', this)" placeholder="99 99999-9999" required><br>
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
		<input type="email" name="email_dono" id="email_dono" placeholder="nickname@provedor.com" required><br>

		<label for="name">Senha</label>
		<input type="password" name="senha_dono" id="senha_dono" placeholder="Crie uma senha" required><br>

		<label for="name">Confirmar Senha</label>
		<input type="password" name="Csenha_dono" id="Csenha_dono" placeholder="Confirme a senha" required><br>
		<input type="submit" value="Próximo" name="Cadastrar">
      </form>

		</div>
	

		
		</div>
		</div>

		</div>
		</div>
		</div>

</body>

</html>