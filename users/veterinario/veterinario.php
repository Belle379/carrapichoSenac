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
		                <div class="card wizard-card" data-color="blue" id="wizard">
								
						<input type='button' class='btn btn_close btn-fill btn-inverse ' name='previous' value='X' onclick="window.location.href='../../index.php'" />
			                <form action="./cadastrarVeterinario.php" method="POST">
			                <!-- You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
									Dados adicionais para veterinarios.
		                        	</h3>
					
		                    	</div>
								<div class="wizard-navigation">
									<ul>
	
										<li><a href="#cert" data-toggle="tab">Formação</a></li>
			                            <li><a href="#type" data-toggle="tab">Serviços</a></li>										
			                            
										
			                        </ul>
								</div>

		                        <div class="tab-content">
									
									<div class="tab-pane" id="cert">
		                                <h4 class="info-text">   </h4>
		                                <div class="row">
											<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group label-floating">
		                                        	<label class="control-label">Curso</label>
													<input type="text" class="form-control" name="nomeCurso" id="nomeCurso" >
		                                    	</div>
		                                	</div>

											<div class="col-lg-4 col-sm-offset-1">
											<div class="form-group label-floating">
		                                        	<label class="control-label">instituicao</label>
													<input type="text" class="form-control" name="instituicao" id="instituicao" >
		                                    	</div>
		                                	</div>

											<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group label-floating">
		                                        	<label class="control-label">Data de Início</label>
													<input type="date" class="form-control" name="dt_inicio" id="dt_inicio" >
		                                    	</div>
														</div>
														<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group label-floating">
		                                        	<label class="control-label">Data de Término</label>
													<input type="date" class="form-control" name="dt_termino" id="dt_termino" >
		                                    	</div>
		                                	</div>
											<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group label-floating">
		                                        	<label class="control-label">Insira arquivo certificado</label>
													<input type="file" class="form-control btn-cta" name="certificado" id="certificado" >
		                                    	</div>
		                                	</div>

												
		                                </div>
		                            </div>
		                         <div class="tab-pane" id="type">
		                                <h4 class="info-text">  Informe quais serviços você irá prestar: </h4>
		                                <div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group label-floating">,
		                                        	<label class="control-label">Informe seu CRMV</label>
													<input type="text" class="form-control" name="CRMV" id="CRMV" >
		                                    	</div>
											</div>
												<div class="col-sm-12 col-sm-offset-1">
		                                        <div class="col-sm-2">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="vacina" value="vacina">
		                                                <div class="icon">
		                                                    <i class="fas fa-syringe"></i>
		                                                </div>
		                                                <h6>Vacinação</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-2">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="consulta" value="consulta">
		                                                <div class="icon">
		                                                    <i class="fas fa-stethoscope"></i>
		                                                </div>
		                                                <h6>Consultas</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-2">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="exame" value="exame">
		                                                <div class="icon">
		                                                    <i class=" fas fa-microscope"></i>
		                                                </div>
		                                                <h6>Exames</h6>
		                                            </div>
		                                        </div>
		                                        
											
												<div class="col-sm-2">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="emergencia" value="emergencia">
		                                                <div class="icon">
		                                                    <i class=" fas fa-truck-medical"></i>
		                                                </div>
		                                                <h6>Emergência</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-2">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="plantao" value="plantao">
		                                                <div class="icon">
		                                                    <i class=" fas fa-business-time"></i>
		                                                </div>
		                                                <h6>Plantão</h6>
		                                            </div>
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
	                                    <input type='button' class='btn btn-next btn-fill  btn-info btn-wd' name='next' value='Próximo' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='cadastrar' value='Cadastrar' />
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
