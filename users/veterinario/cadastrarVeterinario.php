<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 



//.................................................Tabela Serviço Cuidador.....................................................//
$CRMV = $_POST ['CRMV'];
$consulta=  (isset($_POST['consulta']) && !empty($_POST['consulta'])) ? 1 : 0;
$vacina= (isset($_POST['vacina']) && !empty($_POST['vacina'])) ? 1 : 0;
$exame= (isset($_POST['exame']) && !empty($_POST['exame'])) ? 1 : 0;
$emergencia= (isset($_POST['emergencia']) && !empty($_POST['emergencia'])) ? 1 : 0;
$plantao= (isset($_POST['plantao']) && !empty($_POST['plantao'])) ? 1 : 0;
$query_servicoVet = "INSERT INTO tb_servicovet (CRMV, consulta,vacina,exame,emergencia,plantao) 
VALUES ('$CRMV','$consulta', '$vacina', '$exame', '$emergencia','$plantao')";

$result_servicoVet = mysqli_query($conexao, $query_servicoVet);

if ($result_servicoVet > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}

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
    header('Location: ../index.php');
    echo "<script>alert('Dados Salvos!!! <br> Clique em [ENTRAR] e faça seu log in')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}




mysqli_close($conexao);
?>