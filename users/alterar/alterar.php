<?php

include("../conexao.php");
$recid = filter_input(INPUT_POST, 'id_user');
$recfone= filter_input(INPUT_POST, 'fone_user');
$recemail= filter_input(INPUT_POST, 'email_user');
$recsenha= filter_input(INPUT_POST, 'senha_user');
$reccep =filter_input(INPUT_POST, 'cep');
$recuf = filter_input(INPUT_POST, 'uf');
$reccidade= filter_input(INPUT_POST, 'cidade');
$recbairro= filter_input(INPUT_POST, 'bairro');
$recnumero= filter_input(INPUT_POST, 'numero');
$rectpuser= filter_input(INPUT_POST, 'tpuser');

if(mysqli_query($conexao, "UPDATE tb_user, tb_endereco SET fone_user='$recfone', email_user='$recemail',
senha_user='$recsenha', cep='$reccep', uf='$recuf', cidade='$reccidade', bairro='$recbairro',
numero='$recnumero', tpuser='$rectpuser'", MYSQLI_STORE_RESULT)) {

  echo "<script>alert('Dados alterados com sucesso!'); window.location = '/./carrapichoSenac/feed.php';</script>";

} else {

  echo "Não foi possível alterar os dados no Banco de Dados: " . mysqli_error($conexao);

}

  mysqli_close($conexao);



?>