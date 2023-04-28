<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 


//.................................................Tabela Serviço Cuidador.....................................................//

$petSitter = (isset($_POST['petSitter']) && !empty($_POST['petSitter'])) ? 1 : 0;
$hospedeiro = (isset($_POST['hospedeiro']) && !empty($_POST['hospedeiro'])) ? 1 : 0;
$passeador = (isset($_POST['passeador']) && !empty($_POST['passeador'])) ? 1 : 0;

//servicoC = servico Cuidador 
$query_servicoC = "INSERT INTO tb_servicocuidador (petSitter, hospedeiro, passeador) 
VALUES ('$petSitter','$hospedeiro','$passeador')";
$result_servicoC = mysqli_query($conexao, $query_servicoC);

if ($result_servicoC > 0) {
    header("Location:../feed.html");
    echo "<script>alert('Dados Salvos!!! <br> Clique em [ENTRAR] e faça seu log in')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}


mysqli_close($conexao);
?>