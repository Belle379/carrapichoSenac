<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 


//.................................................Tabela Dados Basicos........................................................//

// o $algumacoisa é criando uma variavel  e o $_POST["algumacoisa"] é puxando do dado inserido do formulario
$nome_pet = $_POST["nome_pet"];
$especie_pet = $_POST["especie_pet"];
$sexo = $_POST["sexo"];
$raca = $_POST["raca"];
$vacina = $_POST["vacina"];
$obs = $_POST["obs"];

//$query_algumacoisa é uma variavel para inserir o camando do banco.
//dbCuidador = dados basicos Cuidador 
$query_dbpet = "INSERT INTO tb_pet ( nome_pet, especie_pet,sexo,raca,vacina,obs) 
VALUES ('$nome_pet', '$especie_pet','$sexo','$raca','$vacina','$obs')";
//$result_algumacoisa é outra variavel para conectar direcionar qual é o banco e qual é a tabela. 
$result_dbpet = mysqli_query($conexao, $query_dbpet);

//se ate o codigo acima der tudo certo, o resultado disso é 1 que é maior que zero, isso confirma que cadatrou. 

if ($result_dbpet > 0) {
    header("Location:/./ILSN/carrapichoSenac/carrapichoSenac/feed.html");//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}
