<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 



//.................................................Tabela Serviço Cuidador.....................................................//

$nomeCurso = $_POST['nomeCurso'];
$instituicao = $_POST['instituicao'];
$dt_inicio = $_POST['dt_inicio'];
$dt_termino = $_POST['dt_termino'];
$certificado = $_POST['certificado'];

//servicoC = servico Cuidador 
$query_cursoA = "INSERT INTO formacao (nomeCurso, instituicao, dt_inicio, dt_termino, certificado) 
VALUES ('$nomeCurso','$instituicao','$dt_inicio','$dt_termino','$certificado')";
$result_cursoA = mysqli_query($conexao, $query_cursoA);

if ($result_cursoA > 0) {
    header("Location: /./ILSN/carrapichoSenac/carrapichoSenac/index.php");
    echo "<script>alert('Dados Salvos!!! <br> Clique em [ENTRAR] e faça seu log in')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>
