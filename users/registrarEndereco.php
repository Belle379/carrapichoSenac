<?php 
session_start(); //Iniciar a sessao
include_once "conexao.php"; //Incluir a conexao com BD


$cep = $_POST["cep"];
$uf = $_POST["uf"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];

$query_endereco = "INSERT INTO tb_endereco (cep,uf,cidade,bairro,endereco,numero,complemento) 
        VALUES ('$cep', '$uf','$cidade','$bairro','$endereco' ,'$numero', '$complemento')";
$result_endereco = mysqli_query($conexao, $query_endereco);
        
if ($result_endereco > 0) {
        echo "<script>alert('Seus dados foram salvos !')</script>";
    } else {
        echo "Deu erro:  <br>" . mysqli_error($conexao);
    }    
        mysqli_close($conexao);
        ?>