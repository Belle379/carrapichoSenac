<?php
session_start();

include "conexao.php";

$email = mysqli_real_escape_string($conexao, trim($_POST['email_user']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha_user'])));

       /*print_r('Email: ' . $email);
       print_r('<br>');
       print_r('Senha: ' . $senha);
	   die;*/

$codlogin = "SELECT * FROM tb_user WHERE email_user =  '$email'";

$result = mysqli_query($conexao, $codlogin);
$row = mysqli_num_rows($result);

if($row > 0){
	
	$bd_arr = mysqli_fetch_array($result);
	
	mysqli_close($conexao);
	
	if($bd_arr['senha_user'] == $senha){	
		header("Location: /./carrapichoSenac/feed.php");
		
		
		$_SESSION['nome_user'] = $bd_arr['nome_user'];
		$_SESSION['logado'] = true;
		$_SESSION['id_user'] = $bd_arr['id_user']; 
	
		//var_dump($row);
		//die;		
	
	}else{
		echo "Por favor verificar senha !";
	}

}else{
	echo "Não foi encontrado nenhum cadastro para esse E-mail!";
}
?>