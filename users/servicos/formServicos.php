<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title> Cadastro dono</title>

</head>

<body>

        <h3> Dados do Serviço </h3>

        <h1>Tipo profissional</h1>
        <input type="radio" name="tpProfissional" value="cuidador">
        <label for="cuidador">Cuidador</label>
        <input type="radio" name="tpProfissional" value="veterinario">
        <label for="veterinario">Veterinário</label>
        <input type="radio" name="tpProfissional" value="adestrador">
        <label for="adestrador">Adestrador</label>

        <h1>tipo serviço</h1>

        <input type="radio" name="tpServico" value="petsitter">
        <label for="petsitter">PetSitter</label>

        <input type="radio" name="tpServico" value="hospedar">
        <label for="hospedar">Hospedar</label>

        <input type="radio" name="tpServico" value="exame">
        <label for="exame">Exame</label>

        <input type="radio" name="tpServico" value="vacina">
        <label for="vacina">Vacina</label>


        <input type="radio" name="tpServico" value="consultas">
        <label for="consultas">Consultas</label>

        <input type="radio" name="tpServico" value="passear">
        <label for="passear">Passear</label>

        <input type="radio" name="tpServico" value="treino">
        <label for="treino">Treinar animal</label>

    <h1>Descrição</h1>
    
		<input type="text" name="outro" placeholder="Digite sua Descrição">

<h2>enviar</h2>
<input type="submit" value="enviar" name="enviar">
    </form>




</body>

</html>