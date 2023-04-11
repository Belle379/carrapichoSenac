<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 


//.................................................Tabela Dados Basicos........................................................//

// o $algumacoisa é criando uma variavel  e o $_POST["algumacoisa"] é puxando do dado inserido do formulario
$CPF_veterinario = $_POST["CPF_veterinario"];
$nome_veterinario = $_POST["nome_veterinario"];
$fone_veterinario = $_POST["fone_veterinario"];
$email_veterinario = $_POST["email_veterinario"];
$senha_veterinario = $_POST["senha_veterinario"];
$CRMV = $_POST["CRMV"];
//$query_algumacoisa é uma variavel para inserir o camando do banco.
//dbCuidador = dados basicos Cuidador 
$query_dbveterinario = "INSERT INTO tb_veterinario ( CPF_veterinario, nome_veterinario, fone_veterinario,email_veterinario,senha_veterinario, CRMV) 
VALUES ('$CPF_veterinario', '$nome_veterinario', '$fone_veterinario','$email_veterinario','$senha_veterinario', '$CRMV')";
//$result_algumacoisa é outra variavel para conectar direcionar qual é o banco e qual é a tabela. 
$result_dbveterinario = mysqli_query($conexao, $query_dbveterinario);

//se ate o codigo acima der tudo certo, o resultado disso é 1 que é maior que zero, isso confirma que cadatrou. 

if ($result_dbveterinario > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}

/.................................................Tabela Serviço Cuidador.....................................................//
$consulta=  (isset($_POST['consulta']) && !empty($_POST['consulta'])) ? 1 : 0;
$vacina= (isset($_POST['vacina']) && !empty($_POST['vacina'])) ? 1 : 0;
$exame= (isset($_POST['exame']) && !empty($_POST['exame'])) ? 1 : 0;
$emergencia= (isset($_POST['emergencia']) && !empty($_POST['emergencia'])) ? 1 : 0;
$plantao= (isset($_POST['plantao']) && !empty($_POST['plantao'])) ? 1 : 0;
$query_servicoVet = "INSERT INTO tb_servicovet (consulta,vacina,exame,emergencia,plantao) 
VALUES ('$consulta', '$vacina', '$exame', '$emergencia','$plantao')";

$result_servicoVet = mysqli_query($conexao, $query_servicoVet);

if ($result_servicoVet > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}

mysqli_close($conexao);
?>