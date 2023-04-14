<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 


//.................................................Tabela Dados Basicos........................................................//

// o $algumacoisa é criando uma variavel  e o $_POST["algumacoisa"] é puxando do dado inserido do formulario
$CPF_dono = $_POST["CPF_dono"];
$nome_dono = $_POST["nome_dono"];
$fone_dono = $_POST["fone_dono"];
$email_dono = $_POST["email_dono"];
$senha_dono = md5($_POST["senha_dono"]);

//$query_algumacoisa é uma variavel para inserir o camando do banco.
//dbdono = dados basicos dono 
$query_dbdono = "INSERT INTO tb_dono ( CPF_dono, nome_dono,fone_dono,email_dono,senha) 
VALUES ('$CPF_dono', '$nome_dono','$fone_dono','$email_dono','$senha_dono')";
//$result_algumacoisa é outra variavel para conectar direcionar qual é o banco e qual é a tabela. 
$result_dbdono = mysqli_query($conexao, $query_dbdono);

//se ate o codigo acima der tudo certo, o resultado disso é 1 que é maior que zero, isso confirma que cadatrou. 

if ($result_dbdono > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);//caso contrario irá informar o erro. 
}


//.................................................Tabela Endereço.....................................................//

$cep = $_POST["cep"];
$uf = $_POST["uf"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];


$query_endereco = "INSERT INTO tb_endereco (cep,uf,cidade,bairro,endereco,numero) 
        VALUES ('$cep', '$uf','$cidade','$bairro','$endereco' ,'$numero')";
$result_endereco = mysqli_query($conexao, $query_endereco);
        
if ($result_endereco > 0) {
        echo "<script>alert('Seus dados foram salvos !')</script>";
    } else {
        echo "Deu erro:  <br>" . mysqli_error($conexao);
    }    





mysqli_close($conexao);
?>