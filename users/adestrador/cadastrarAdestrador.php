<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 


//.................................................Tabela Dados Basicos........................................................//

// o $algumacoisa é criando uma variavel  e o $_POST["algumacoisa"] é puxando do dado inserido do formulario
$CPF_adestrador = $_POST["CPF_adestrador"];
$nome_adestrador = $_POST["nome_adestrador"];
$fone_adestrador = $_POST["fone_adestrador"];
$email_adestrador = $_POST["email_adestrador"];
$senha_adestrador = md5($_POST["senha_adestrador"]);

//$query_algumacoisa é uma variavel para inserir o camando do banco.
//dbCuidador = dados basicos Cuidador 
$query_dbAdestrador = "INSERT INTO tb_adestrador ( CPF_adestrador, nome_adestrador,fone_adestrador,email_adestrador,senha_adestrador) 
VALUES ('$CPF_adestrador', '$nome_adestrador','$fone_adestrador','$email_adestrador','$senha_adestrador')";
//$result_algumacoisa é outra variavel para conectar direcionar qual é o banco e qual é a tabela. 
$result_dbAdestrador = mysqli_query($conexao, $query_dbAdestrador);

//se ate o codigo acima der tudo certo, o resultado disso é 1 que é maior que zero, isso confirma que cadatrou. 

if ($result_dbAdestrador > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}



//.................................................Tabela Especie...........................................................//

// esse é um campo de check box e esse codigo é para dizer que se o campo for marcado 
//armazene o valor 1 no banco se não armazene o valor 0 
$cao = (isset($_POST['cao']) && !empty($_POST['cao'])) ? 1 : 0;
$gato = (isset($_POST['gato']) && !empty($_POST['gato'])) ? 1 : 0;
$outro = $_POST["outro"];

// O resto é a mesma logica do que foi comentado a cima. 

$query_especie = "INSERT INTO tb_especie (cao, gato, outro) 
VALUES ('$cao','$gato','$outro')";
$result_especie = mysqli_query($conexao, $query_especie);

if ($result_especie > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}
//.................................................Tabela Porte.............................................................//
$pequeno = (isset($_POST['pequeno']) && !empty($_POST['pequeno'])) ? 1 : 0 ;
$medio = (isset($_POST['medio']) && !empty($_POST['medio'])) ? 1 : 0 ;
$grande = (isset($_POST['grande']) && !empty($_POST['grande'])) ? 1 : 0 ;

$query_porte = "INSERT INTO tb_porte (pequeno, medio,grande) 
VALUES ('$pequeno','$medio','$grande')";
$result_porte = mysqli_query($conexao, $query_porte);

if ($result_porte > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}

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
    echo "<script>alert('Seus dados foram salvos !')</script>";
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}


mysqli_close($conexao);
?>