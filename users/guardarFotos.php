<?php 
session_start(); //Iniciar a sessao
include "conexao.php"; //Incluir a conexao com BD
$msg = false;

if(isset ($_FILES['foto'])){

    $Imagem = $_FILES['foto'];
    $ImagemNome = md5(time()) . '.' . pathinfo($Imagem['name'], PATHINFO_EXTENSION);
    $ImagemDiretorio = '../upload';
    move_uploaded_file($Imagem['tmp_name'], $ImagemDiretorio . '/' . $ImagemNome);
    $ImagemFinal = "$ImagemDiretorio/$ImagemNome";

    $sql_code = "INSERT INTO foto (foto, data_cadastro) VALUES ('$ImagemFinal', NOW())";

    mysqli_query($conexao, $sql_code);

    if(mysqli_query($conexao, $sql_code)){
        echo "<script>alert('Seus dados foram salvos!')</script>";
        }else{
            echo "<script>alert('Erro em salvar imagem ')</script>";
        };
};


?>