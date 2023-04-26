<?php
session_start();

include "conexao.php";


    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

      //  print_r('Email: ' . $email);
      //  print_r('<br>');
      //  print_r('Senha: ' . $senha);

$codlogin ="SELECT tb_dono.email_dono , tb_cuidador.email_cuidador , tb_adestrador.email_adestrador, tb_veterinario.email_veterinario, tb_dono.senha_dono , tb_cuidador.senha_cuidador , tb_adestrador.senha_adestrador, tb_veterinario.senha_veterinario 
FROM  tb_dono, tb_cuidador, tb_adestrador, tb_veterinario 

WHERE  ( tb_dono.email_dono = '$email' OR tb_cuidador.email_cuidador = '$email' OR tb_adestrador.email_adestrador = '$email' OR tb_veterinario.email_veterinario = '$email' )
AND    ( tb_dono.senha_dono = '$senha' OR tb_cuidador.senha_cuidador = '$senha' OR tb_adestrador.senha_adestrador = '$senha' OR tb_veterinario.senha_veterinario = '$senha')";

$result = $conexao->query($codlogin);

if(mysqli_num_rows($result) < 1){
    unset($_SESSION['email_dono']);
    unset($_SESSION['senha_dono']);
    header('Location: login.php');
}
else
{
    $_SESSION['email_cuidador'] = $email;
    $_SESSION['senha_cuidador'] = $senha;
    header('Location: sistema.php');
}
if(mysqli_num_rows($result) < 1)
{
    $_SESSION['email_adestrador'] = $email;
    $_SESSION['senha_adestrador'] = $senha;
    header('Location: sistema.php');
}
if(mysqli_num_rows($result) < 1)
{
    $_SESSION['email_veterinario'] = $email;
    $_SESSION['senha_veterinario'] = $senha;
    header('Location: sistema.php');
}
if(mysqli_num_rows($result) < 1)
{
// Não acessa
header('Location: login.php');
}

    }
?>