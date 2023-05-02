<?php

include("perfilzinho/conexao.php");

$recid= filter_input(INPUT_GET, "user");
$recid = str_replace(array('.', '-'), '', $recid);

if(mysqli_query($conexao, "DELETE  FROM tb_user WHERE id_user = $recid")) {
echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'moderador.php';</script>";
} else {
echo "Não foi possível excluir os dados no Banco de Dados: " . mysqli_error($conexao);
}

  mysqli_close($conexao);



?>