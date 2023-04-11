<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<title> Cadastro dono</title>

</head>

<body>
	
	<h2> Cadastro Pet </h2>
	<form action="./cadastrarPet.php" method="POST">

		<h3> Dados do Pet </h3>

		<label for="name">Nome do Pet</label>
		<input type="text" name="nome_pet" id="nome_pet" ><br>

        <input type="radio" name="especie_pet" value="Cachorro">
		<label for="especie_pet">Cachorro</label>

		<input type="radio" name="especie_pet" value="Gato">
		<label for="especie_pet">Gatos</label>

		<label> Pet de outra especie</label>
		<input type="text" name="Oespecie_pet" >

        <label for="name">Raça (opcional)</label>
		<input type="text" name="raca" id="raca" ><br>

        <input type="radio" name="sexo" value="macho">
		<label for="sexo">Macho</label>

		<input type="radio" name="sexo" value="femea">
		<label for="sexo">Femea</label>
		
		<input type="radio" name="vacina" value="vacinado">
		<label for="vacina">Vacinado</label>

        <label for="obs">Observações:</label>
        <input type="textbox" name="obs" >
	

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