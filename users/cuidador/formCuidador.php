<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

	<title> Cadastro Cuidador</title>

</head>

<body>
	
	<h2> Cadastro Cuidador </h2>
	<form action="./cadastrarCuidador.php" method="POST">

		<h3> Dados Pessoias </h3>

		<label for="name">CPF</label>
		<input type="number" name="CPF_cuidador" id="CPF_cuidador" class="cpf-mask" required><br>

		<label for="name">Nome</label>
		<input type="text" name="nome_cuidador" id="nome_cuidador" placeholder="Digite seu nome" required><br>

		<label for="name">Nº de Telefone</label>
		<input type="number" name="fone_cuidador" id="fone_cuidador" class="phone-mask" required><br>

		<label for="name">E-mail</label>
		<input type="text" name="email_cuidador" id="email_cuidador" placeholder="nickname@provedor.com" required><br>

		<label for="name">Senha</label>
		<input type="text" name="senha_cuidador" id="senha_cuidador" placeholder="Crie uma senha" required><br>

		<label for="name">Confirmar Senha</label>
		<input type="text" name="Csenha_cuidador" id="Csenha_cuidador" placeholder="Confirme a senha" required><br>
		<input type="submit" value="Próximo" name="Cadastrar">

		<script> $(document).ready(function() { $('.cpf-mask').mask('000.000.000-00', {reverse: true}); $('.phone-mask').mask('(00) 0000-0000'); }); </script>
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

		<h5>Quais serviços você pretente prestar?</h5>

		<input type="checkbox" name="petSitter" id="petSitter" value="Pet Sitter">
		<label for="PetSitter">Pet Sitter </label>

		<input type="checkbox" name="hospedeiro" value="Hotelzinho">
		<label for="hospedeiro">Hotelzinho</label>

		<input type="checkbox" name="passeador" value="Passeia">
		<label for="passeador">Passeador</label>

		<input type="submit" value="Cadastrar" name="Cadastrar">
		</div>
		</div>

		</div>
		</div>

		
		 FOTOS

</div>

</body>

</html>