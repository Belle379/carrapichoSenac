<?php
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'moderador@carrapicho.com' && $password === 'carra123') {
  // Se as credenciais estiverem corretas, redirecione o usuário para a página de boas-vindas
  header("Location: welcome.php");
  exit();
} else {
  // Se as credenciais estiverem incorretas, mostre uma mensagem de erro
  echo "E-mail ou senha incorretos. Tente novamente.";
}
?>