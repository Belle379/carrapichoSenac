<?php
session_start();

include "conexao.php";


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$codlogin ="SELECT tb_dono.email_dono , tb_cuidador.email_cuidador , tb_adestrador.email_adestrador, tb_veterinario.email_veterinario, tb_dono.senha_dono , tb_cuidador.senha_cuidador , tb_adestrador.senha_adestrador, tb_veterinario.senha_veterinario 
FROM  tb_dono, tb_cuidador, tb_adestrador, tb_veterinario 
WHERE  ( tb_dono.email_dono = '$email' OR tb_cuidador.email_cuidador = '$email' OR tb_adestrador.email_adestrador = '$email' OR tb_veterinario.email_veterinario = '$email' )
AND    ( tb_dono.senha_dono = '$senha' OR tb_cuidador.senha_cuidador = '$senha' OR tb_adestrador.senha_adestrador = '$senha' OR tb_veterinario.senha_veterinario = '$senha')";

$result = mysqli_query($conexao, $codlogin);
$row = mysqli_num_rows($result);

if($row > 0){
	
	$bd_arr = mysqli_fetch_array($result);
	
	mysqli_close($conexao);
//.................................dono.........................
	if($bd_arr['senha_dono'] == $senha){	
		header("Location: perfilDono.php");
		
		
		$_SESSION['nome_dono'] = $bd_arr['nome_dono'];
		$_SESSION['logado'] = true;
		$_SESSION['id_dono'] = $bd_arr['id_dono']; 
	
		//var_dump($row);
		//die;		
	
	}else{
		echo "Por favor verificar senha !";
	
//................................cuidador.........................
} 
        if($bd_arr['senha_cuidador'] == $senha){	
            header("Location: perfilDono.php");
            
            
            $_SESSION['nome_cuidador'] = $bd_arr['nome_cuidador'];
            $_SESSION['logado'] = true;
            $_SESSION['id_cuidador'] = $bd_arr['id_cuidador']; 
        
            //var_dump($row);
            //die;		
        
        }else{
            echo "Por favor verificar senha !";
        } 
    }
  
//.................................adestrador.........................
        if($bd_arr['senha_adestrador'] == $senha){	
            header("Location: perfilDono.php");
            
            
            $_SESSION['nome_adestrador'] = $bd_arr['nome_adestrador'];
            $_SESSION['logado'] = true;
            $_SESSION['id_adestrador'] = $bd_arr['id_adestrador']; 
        
            //var_dump($row);
            //die;		
        
        }else{
            echo "Por favor verificar senha !";
        } 
    
//.................................veterinario.........................
        if($bd_arr['senha_veterinario'] == $senha){	
            header("Location: perfilDono.php");
            
            
            $_SESSION['nome_veterinario'] = $bd_arr['nome_veterinario'];
            $_SESSION['logado'] = true;
            $_SESSION['id_veterinario'] = $bd_arr['id_veterinario']; 
        
            //var_dump($row);
            //die;		
        
        }else{
            echo "Por favor verificar senha !";
      
        }



//	echo "Não foi encontrado nenhum cadastro para esse E-mail!";

    
?>