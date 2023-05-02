<?php
session_start();

include "users/conexao.php";

$email_user = mysqli_real_escape_string($conexao, trim($_POST['email_user']));
$senha_user = mysqli_real_escape_string($conexao, trim(md5($_POST['senha_user'])));


$query = "SELECT * FROM `tb_user` WHERE `email_user` = '$email_user'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if($row > 0){

	$sqlinsert = "UPDATE `tb_user` SET `senha_user` = '$senha_user'  WHERE `email_user` = '$email_user'";
	$rinsert = mysqli_query($conexao, $sqlinsert);

    header('location: index.php');
}else{

	echo "Não foi possivel Alterar a Senha!";
}



?>