<?php
session_start(); //Iniciar a sessao
include_once "../conexao.php"; //Incluir a conexao com BD

//var_dump(); // Geralmente se usa o Var_dump para testar uma  parte  especifica do codigo. Pode usar em qualquer parte do codigo
//é só por depois do codigo que vc quer testar. 
//die;//esse comando faz o sistema rodar só ate esse ponto, é interessante por depois do var_damp, para não correr o risco de 
//aparecer retorno de outros codigos ou intereferencia no resultado. 




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
//.................................................Tabela cpf em outra tabela........................................................//

//.................................................Tabela Dados Basicos........................................................//

// o $algumacoisa é criando uma variavel  e o $_POST["algumacoisa"] é puxando do dado inserido do formulario
$CPF_user = $_POST["CPF_user"];
$nome_user = $_POST["nome_user"];
$fone_user = $_POST["fone_user"];
$email_user = $_POST["email_user"];
$senha_user = md5($_POST["senha_user"]);
$tpuser = $_POST ["tpuser"];
$descricao = $_POST["descricao"];

//$query_algumacoisa é uma variavel para inserir o camando do banco.
//dbuser = dados basicos user 
$query_dbuser = "INSERT INTO tb_user ( CPF_user, nome_user,fone_user,email_user,senha_user,tpuser, descricao) 
VALUES ('$CPF_user', '$nome_user','$fone_user','$email_user','$senha_user','$tpuser','$descricao')";
//$result_algumacoisa é outra variavel para conectar direcionar qual é o banco e qual é a tabela. 
$result_dbuser = mysqli_query($conexao, $query_dbuser);

//se ate o codigo acima der tudo certo, o resultado disso é 1 que é maior que zero, isso confirma que cadatrou. 

if ($result_dbuser > 0) {
    echo "<script>alert('Seus dados foram salvos !')</script>";//então irá aparecer a mensagem que foram salvos 
} else {
    echo "Deu erro:  <br>" . mysqli_error($conexao);
}

switch ($tpuser) {
    case "tutor":
        header("Location:/./ILSN/carrapichoSenac/carrapichoSenac/index.php");
        echo "<script>alert('Dados Salvos!!! <br> Clique em [ENTRAR] e faça seu log in')</script>";
        break;
    case "cuidador":
        header("Location:../cuidador/formcuidador.php");
        echo "<script>alert('Seus dados foram salvos !')</script>";
        break;
    case "adestrador":
        header("Location:../adestrador/formadestrador.php");
        echo "<script>alert('Seus dados foram salvos !')</script>";
        break;
    case "veterinario":
        header("Location:../veterinario/formVeterinario.php");
        echo "<script>alert('Seus dados foram salvos !')</script>";
        break;
    }



mysqli_close($conexao);

?>