<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 
//.................................................Tabela Pet...........................................................//

$nome_pet = $_POST["nome_pet"];
$especie_pet = $_POST["especie_pet"];
$Oespecie_pet = $_POST["Oespecie_pet"];
$sexo = $_POST["sexo"];
$raca = $_POST["raca"];
$vacina =(isset($_POST['vacina']) && !empty($_POST['vacina'])) ? 1 : 0;
$obs = $_POST["obs"];

$query_dbpet = "INSERT INTO tb_pet (nome_pet, especie_pet, Oespecie_pet,sexo,raca,vacina,obs)
VALUES ('$nome_pet','$especie_pet', '$Oespecie_pet','$sexo','$raca','$vacina','$obs')";
$result_dbpet = mysqli_query($conexao, $query_dbpet);

if ($result_dbpet > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}

mysqli_close($conexao);
?>