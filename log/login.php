<?php
session_start();

include "conexao.php";


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$codlogin ="SELECT tb_dono.email_dono , tb_cuidador.email_cuidador , tb_adestrador.email_adestrador, tb_veterinario.email_veterinario, tb_dono.senha_dono , tb_cuidador.senha_cuidador , tb_adestrador.senha_adestrador, tb_veterinario.senha_veterinario 
FROM  tuto, cuidador, adestrador, veterinario 
WHERE  ( tb_dono.email_dono = '$email' OR tb_cuidador.email_cuidador = '$email' OR tb_adestrador.email_adestrador = '$email' OR tb_adestrador.email_adestrador= '$email')
AND    ( tb_dono.email_dono = '$senha' OR tb_cuidador.email_cuidador = '$senha' OR tb_adestrador.email_adestrador = '$senha' OR tb_adestrador.email_adestrador= '$senha')";

$result = mysqli_query($conexao, $codlogin);
$row = mysqli_num_rows($result);

if ($row > 0 ){
    
}