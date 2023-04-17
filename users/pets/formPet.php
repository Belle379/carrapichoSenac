<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<h2> Cadastro pets</h2>
	<form action="./cadastrarPet.php" method="POST">

		<label for="nome_pet">Nome do Pet:</label><br>
		<input type="text" id="nome_pet" name="nome_pet"><br>

		<label for="especie_pet">Espécie do Pet:</label><br>
		<input type="text" id="especie_pet" name="especie_pet"><br>

		<label for="sexo">Sexo:</label><br>
		<input type="radio" id="macho" name="sexo" value="macho">
		<label for="macho">Macho</label><br>
		<input type="radio" id="femea" name="sexo" value="femea">
		<label for="femea">Fêmea</label><br>

		<label for="raca">Raça:</label><br>
		<input type="text" id="raca" name="raca"><br>

		<label for="vacina">Vacinado:</label><br>
		<input type="checkbox" id="vacina" name="vacina" value="sim">
		<label for="vacina">Sim</label><br>
		<input type="checkbox" id="vacina" name="vacina" value="nao">
												<label for="vacina">Não</label><br>

		<label for="observacao">Observação:</label><br>
		<textarea id="obs" name="obs"></textarea><br>

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