<?php
session_start();
include "../conexao.php";


$id_user = $_SESSION['id_user'];

$query = "SELECT  fone_user, email_user, senha_user, cep, uf, cidade, bairro, endereco, numero FROM tb_user, tb_endereco";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Atualizar Dados</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'
    type='text/css'>
	<script src="https://kit.fontawesome.com/8c2ef3f346.js" crossorigin="anonymous"></script>
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizardee.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/gationho.jpg')">
	 
		

		<!--  Made With Material Kit  
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">C</div>
			<div class="made-with">Carra <strong>picho</strong></div>
		</a>-->
	    <!--   Big container  -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!-- Wizard container   -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizard">
						
	                  <input type='button' class='btn btn_close btn-fill btn-inverse ' name='previous' value='X' onclick="window.location.href='../../index.php'" />
	                               
						<form action="alterar.php" method="POST">
			                <!-- You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">


		                        		Atualize seus dados! 

		                        	</h3>
								
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Dados Basicos</a></li>
			                            <li><a href="#facilities" data-toggle="tab">Endereço</a></li>
										<li><a href="#type" data-toggle="tab">Tipo de Usuário</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<!--<div class="col-sm-12">
		                                    	<h4 class="info-text"> Let's start with the basic details</h4>
		                                	</div>-->
						
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Número de Celular</label>

													<input type="number" class="form-control" name="fone_user" id="fone_user" value= <?php echo $bd_arr['fone_user'] ?>>
												
												</div>
		                                	</div>
		                              	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Email</label>

													<input type="email" class="form-control" name="email_user" id="email_user" value= <?php echo $bd_arr['email_user'] ?> >

		                                    	</div>
		                                	</div>
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Nova Senha </label>

													<input type="password" class="form-control" name="senha_user" id="senha_user"  value= <?php echo $bd_arr['senha_user'] ?> >

		                                    	</div>
		                                	</div>
											<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Confirmar Nova Senha</label>
													<input type="password" class="form-control" name="Csenha_user" id="Csenha_user"  >

		                                    	</div>
		                                	</div>
		                                	<?php
// Verificar se as senhas foram enviadas
if (isset($_POST['senha_user']) && isset($_POST['Csenha_user'])) {
  $senha = $_POST['senha_user'];
  $confirmar_senha = $_POST['Csenha_user'];

  // Verificar se as senhas correspondem
  if ($senha === $confirmar_senha) {
    // As senhas correspondem, pode prosseguir com o processamento do formulário
  } else {
    // As senhas não correspondem, exibir uma mensagem de erro
    echo "As senhas não correspondem!";
  }
}

?>

		                            	</div>
		                            </div>
		                            
		                            <div class="tab-pane" id="facilities">
		                                <!--<h4 class="info-text"> </h4>-->
		                                <div class="row">
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">CEP</label>
													<input type="text" id="cep" class="form-control" name="cep" class="input"  value= <?php echo $bd_arr['cep'] ?> >
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
													<label class="control-label">Estado</label>
														<option disabled="" selected="" ></option>
		                                        	<select class="form-control" id="uf" name="uf" value= <?php echo $bd_arr['uf'] ?> >
														<option value="AC">Acre</option>
														<option value="AL">Alagoas</option>
														<option value="AP">Amapá</option>
														<option value="AM">Amazonas</option>
														<option value="BA">Bahia</option>
														<option value="CE">Ceará</option>
														<option value="DF">Distrito Federal</option>
														<option value="ES">Espírito Santo</option>
														<option value="GO">Goiás</option>
														<option value="MA">Maranhão</option>
														<option value="MT">Mato Grosso</option>
														<option value="MS">Mato Grosso do Sul</option>
														<option value="MG">Minas Gerais</option>
														<option value="PA">Pará</option>
														<option value="PB">Paraíba</option>
														<option value="PR">Paraná</option>
														<option value="PE">Pernambuco</option>
														<option value="PI">Piauí</option>
														<option value="RJ">Rio de Janeiro</option>
														<option value="RN">Rio Grande do Norte</option>
														<option value="RS">Rio Grande do Sul</option>
														<option value="RO">Rondônia</option>
														<option value="RR">Roraima</option>
														<option value="SC">Santa Catarina</option>
														<option value="SP">São Paulo</option>
														<option value="SE">Sergipe</option>
														<option value="TO">Tocantins</option>
													</select>
		                                    	</div>
		                                	</div>
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Cidade</label>
													<input type="text" id="cidade" class="form-control" name="cidade" class="input"  value= <?php echo $bd_arr['cidade'] ?>   >
		                                    	</div>
		                                	</div>
		                              	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Bairro</label>
													<input type="text" id="bairro" class="form-control" name="bairro" class="input" value= <?php echo $bd_arr['bairro'] ?> >
													
		                                    	</div>
		                                	</div>
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Endereço </label>
													<input type="text" id="endereco" class="form-control" name="endereco" class="input" value= <?php echo $bd_arr['endereco'] ?>>
		                                    	</div>
		                                	</div>
											<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Número </label>
													<input type="number" id="numero" class="form-control" name="numero" class="input" value= <?php echo $bd_arr['numero'] ?> >
		                                    	</div>
		                                	</div>
									
											<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
    $("#cep").blur(function(){
    
        var cep = this.value.replace(/[^0-9]/, "");

        if(cep.length != 8){
            return false;
        }
        
    
        var url = "https://viacep.com.br/ws/"+cep+"/json/";
        

        $.getJSON(url, function(dadosRetorno){
            try{
                $("#endereco").val(dadosRetorno.logradouro);
                $("#bairro").val(dadosRetorno.bairro);
                $("#cidade").val(dadosRetorno.localidade);
                $("#uf").val(dadosRetorno.uf);
            }catch(ex){}
        });
    });
 
</script>

		                                </div>
		                            </div>
									<div class="tab-pane" id="type">
		                                <h4 class="info-text">  Infome que tipo de funcionário irá desempenhar </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
											<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox" rel="tooltip" title="This is good if you travel alone.">
		                                                <input type="checkbox" name="tpuser" value="tutor">
		                                                <div class="icon">
		                                                    <i class="fas fa-paw"></i>
		                                                </div>
		                                                <h6>Sou um Tutor</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox" rel="tooltip">
		                                                <input type="checkbox" name="tpuser" value="cuidador">
		                                                <div class="icon">
		                                                    <i class="fas fa-cat"></i>
		                                                </div>
		                                                <h6> Sou um cuidador</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox" rel="tooltip">
		                                                <input type="checkbox" name="tpuser" value="adestrador">
		                                                <div class="icon">
		                                                    <i class=" fas fa-dog"></i>
		                                                </div>
		                                                <h6>Sou um adestrador</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox" rel="tooltip">
		                                                <input type="checkbox" name="tpuser" value="veterinario">
		                                                <div class="icon">
		                                                    <i class="fas fa-stethoscope"></i>
		                                                </div>
		                                                <h6>Sou um veterinário</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>		
		                  
		                        <div class="wizard-footer" >
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Próximo' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-warning  btn-wd' name='cadastrar' value='Cadastrar' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Voltar' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
								
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	        </div>
	    </div>
	</div>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</body>
	

</html>
