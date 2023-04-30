<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title> Serviços </title>

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />

		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
		<link rel="icon" type="image/png" href="assets/img/favicon.png" />

		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css"
			href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
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
						<div class="card wizard-card" data-color="red" id="wizard">
							<form action="./cadastrarServicos.php" method="POST">
								<!-- You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

								<div class="wizard-header">
									<h3 class="wizard-title">
										Solicite seu serviço aqui!
									</h3>
									<h5> Estas informaçãoes irão nos permitir saber mais sobre sua necessidade</h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li><a href="#location" data-toggle="tab">Solicitar serviço</a></li>
										<li><a href="#des" data-toggle="tab">Solicitar serviço</a></li>
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
													<label for="sexo">
														<h6>Tipo de profissinal:</h6>
													</label><br>
													<input type="radio" id="cuidador" name="TpProfissional"
														value="Cuidador" onclick="mostrarLista()">
													<label for="cuidador">Cuidador</label><br>
													<input type="radio" id="adestrador" name="TpProfissional"
														value="adestrador">
													<label for="adestrador">Adestrador</label><br>
													<input type="radio" id="veterinario" name="TpProfissional"
														value="veterinario" onclick="mostrarLista()">
													<label for="veterinario">Veterinário</label><br>


													<!--Se escolher cuidador, pode codigo em php-->
													<div id="TpServicoC" style="display:none">
														<div class="form-group label-floating">
															<label for="sexo">
																<h6>Tipo de Serviço<h6>
															</label><br>
															<input type="radio" id="petSitter" id="TpServicoC"
																name="TpServico" value="PetSitter">
															<label for="petSitter">Pet Sitter</label><br>
															<input type="radio" id="passeador" id="TpServicoC"
																name="TpServico" value="Passeador">
															<label for="passeador">Passeador</label><br>
															<input type="radio" id="hospedeiro" id="TpServicoC"
																name="TpServico" value="Hospedeiro">
															<label for="hospedeiro">Anfitrião</label><br>
														</div>
													</div>
													<script>
														document.querySelectorAll('input[name="TpProfissional"]').forEach((radio) => {
															radio.addEventListener('change', () => {
																if (radio.value === 'Cuidador') {
																	document.getElementById('TpServicoC').style.display = 'block';
																} else {
																	document.getElementById('TpServicoC').style.display = 'none';
																}
															});
														});
													</script>
													<!--Se escolher Adestrador, pode codigo em php-->
													<div id="TpServicoA" style="display:none">
														<div class="form-group label-floating">
															<label for="sexo">
																<h6>Tipo de Serviço<h6>
															</label><br>
															<input type="radio" id="CorrigirmausHabitos" id="TpServicoA"
																name="TpServico" value="Corrigir maus habitos">
															<label for="petSitter">Corrigir maus hábitos </label><br>
															<input type="radio" id="EnsinarTruques" id="TpServicoA"
																name="TpServico" value="Ensinar Truques">
															<label for="passeador"> Ensinar Truques </label><br>
														</div>
													</div>
													<script>
														document.querySelectorAll('input[name="TpProfissional"]').forEach((radio) => {
															radio.addEventListener('change', () => {
																if (radio.value === 'adestrador') {
																	document.getElementById('TpServicoA').style.display = 'block';
																} else {
																	document.getElementById('TpServicoA').style.display = 'none';
																}
															});
														});
													</script>
													<!--Se escolher veterinario, pode codigo em php-->
													<div id="TpServicoV" style="display:none">
														<div class="form-group label-floating">
															<label for="sexo">
																<h6>Tipo de Serviço<h6>
															</label><br>
															<input type="radio" id="exame" id="TpServicoV"
																name="TpServico" value="Exame">
															<label for="exames">Exame</label><br>
															<input type="radio" id="consulta" id="TpServicoV"
																name="TpServico" value="Consulta">
															<label for="consulta">Consulta</label><br>
															<input type="radio" id="vacina" id="TpServicoV"
																name="TpServico" value="Vacina">
															<label for="vacina">Vacina</label><br>
															<input type="radio" id="emergencia" id="TpServicoV"
																name="TpServico" value="Emergencia">
															<label for="emergecia">Emergencia</label><br>
														</div>
													</div>
													<script>
														document.querySelectorAll('input[name="TpProfissional"]').forEach((radio) => {
															radio.addEventListener('change', () => {
																if (radio.value === 'veterinario') {
																	document.getElementById('TpServicoV').style.display = 'block';
																} else {
																	document.getElementById('TpServicoV').style.display = 'none';
																}
															});
														});
													</script>
												</div>
											</div>



										</div>
									</div>



									<div class="tab-pane" id="des">
									<div class="col-lg-4 col-sm-offset-1">
											<div class="form-group label-floating">
												<h6> Informações importantes para se por na descrição:</h6>

												<p>	Nome, idade, genero, especia  e raça do  ou dos animais.</p>
												<p>	Fale um pouco sobre o pet, sobre seu temperamnto e rotina.</p>
												<p> E algo a mais que achar interessante ou necessario.
												
												
											</div>
										</div>
										<div class="col-lg-6 col-sm-offset-1">
											<div class="form-group label-floating">
												<label class="control-label"> Descrição </label>
												<textarea rows="12" cols="12" class="form-control"
													name="descricao"></textarea>
											</div>
										</div>
										
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next'
											value='Próximo' />
										<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd'
											name='cadastrar' value='Cadastrar' />
									</div>
									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
											name='previous' value='Voltar' />
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


<title> Cadastro dono</title>

</head>

<body>





</body>

</html>