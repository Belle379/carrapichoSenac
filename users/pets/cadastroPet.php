<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

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
	<link href="assets/css/material-bootstrap-wizarde.css" rel="stylesheet" />

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
			                <form action="./cadastrarAdestrador.php" method="POST">
			                <!-- You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Cadastre-se seu pet!
		                        	</h3>
									<h5> Estas informaçãoes irão nos permitir saber mais sobre seu pet</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Cadastro do pet</a></li>
										<li><a href="#type" data-toggle="tab">Foto do pet</a></li>
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
		                                        	<label class="control-label">Nome do Pet</label>
													<input type="text" class="form-control" name="nome_pet" id="nome_pet" >
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
												<label class="control-label">Espécie do Pet</label>
													<input type="text" class="form-control" name="especie_pet" id="especie_pet" >
												</div>
		                                	</div>
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
												<label for="sexo">Sexo:</label><br>
												<input type="radio" id="macho" name="sexo" value="macho">
												<label for="macho">Macho</label><br>
												<input type="radio" id="femea" name="sexo" value="femea">
												<label for="femea">Fêmea</label><br>											
												</div>
		                                	</div>
		                              	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
												<label class="control-label">Raça</label>
													<input type="text" class="form-control" name="raca" id="raca" >
		                                    	</div>
		                                	</div>
											<div class="col-lg-4 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
												<label for="vacina">Vacinado:</label><br>
		 										<input type="checkbox" id="vacina" name="vacina" value="sim">
												<label for="vacina">Sim</label><br>
												<input type="checkbox" id="vacina" name="vacina" value="nao">
												<label for="vacina">Não</label><br>
		                                    	</div>
		                                	</div>
											<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
												<label class="control-label">Observação</label>
													<input type="text" class="form-control" name="Obs" id="Obs" >
		                                    	</div>
		                                	</div>
		                                	
		                            	</div>
		                            </div>
		                         <div class="tab-pane" id="type">
		                            
		                                <div class="row">
											<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group label-floating choice">
										
													<input type="file" class="form-control " name="fotoPet" id="fotoPet" >
													<div class="icon">
		                                                    <i class="fas fa-image"></i>
		                                                </div>
														<h6> Insira uma foto do Pet" </h6>
		                                    	</div>
		                                	</div>									
		                                </div>
		                            </div>
								
								
		                          <!--  <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description. </h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Place description</label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Example</label>
		                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>-->
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Próximo' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='cadastrar' value='Cadastrar' />
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

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>