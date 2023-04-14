<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="utf-8">
    <title>CARRAPICHO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
 

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'
    type='text/css'>

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/styllee.css" rel="stylesheet">
</head>

<body>
   
    <!-- Navbar Start -->
    <header>
    <div class="container-fluid p-0">
        <nav class="navbar-header navbar-expand-lg navbar-dark py-3 py-lg-0 px-lg-5 sticky-top" id="navcor">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Carrapicho</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0" id="navtext">
                    <a  href="index.html" class="nav-item nav-link active">Inicío</a>
                    <a href="#sobrenos" class="nav-item nav-link">Sobre Nós</a>
                    <a href="#atividades" class="nav-item nav-link">Atividades</a>
                    <a href="#participe" class="nav-item nav-link">Cadastre-se</a>
                    <a href="contact.html" class="nav-item nav-link">Fale Conosco</a>
                    <div class="nav-item dropdown">
                    </div>
                   
                </div>
                <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Entre</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body mx-3">
                    <?php include 'cadastro front/cuidador.html';?>
                      <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                      </div>
              
                      <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                      </div>
              
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-default">Login</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="text-center">
                <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block p-md-3  " data-toggle="modal" data-target="#modalLoginForm">Entrar</a>
              </div>
            </div>
            </div>
        </nav>
    </div>
</header>
    <!-- Navbar End -->
    
 <!-- Carousel Start -->
 <div class="container-fluid p-0" id="carrossel">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 " src="img/cachorrinho.jpg" alt="Image" id="fotoc">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Bem Vindo ao</h3>
                        <h1 class="display-3 text-white mb-3">CARRAPICHO</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Sempre ajudando a cuidar de seu pet</h5>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Cadastre-se</a>
                        <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiba Mais </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/gatinho.jpg" alt="Image" id="fotoc">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Bem Vindo ao</h3>
                        <h1 class="display-3 text-white mb-3">CARRAPICHO</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block"> Junte-se a nós em prol dessa causa</h5>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Cadastre-se</a>
                        <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiaba Mais </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn  rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>

<!-- Carousel End -->

    <!-- Booking Start 
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Date" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Time" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                    <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                    <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Boarding</h5>
                                </div>
                                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Feeding</h5>
                                </div>
                                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Grooming</h5>
                                </div>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Tranning</h5>
                                </div>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Booking Start -->


    <!-- About Start -->
    <div id="sobrenos" class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h2 class="text-info mb-1">Sobre a</h2>
                <h1 class="display-4 mb-4"><span class="text-primary">Carrapicho</span></h1>
                <h5 class="text-muted mb-3">Amet stet amet ut. Sit no vero vero no dolor. Sed erat ut sea. Just clita ut stet kasd at diam sit erat vero sit.</h5>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Ajudamos os animais</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Ajudamos quem ama os animais</h5></li>

                </ul>
                <a href="" class="btn btn-lg btn-primary mt-3 px-4">Saiba mais</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    


    <!-- Services Start -->
    <div id="atividades" class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h2 class="text-info mb-3">Entenda como funcionaos profissionais: </h2>
                <h1 class="display-4 m-0"><span class="text-primary">Carrapicho</span></h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Cuidador</h3>
                        <p>Os cuidadores são responsáveis por três funções, que são optativas, são elas: Pet Sitter (babá de pet), que consiste em ir até a casa do tutor do animal cuidar do pet; Hospedeiro/ Hotel, são aqueles que podem receber os animais em sua residência; e Passeador, são as pessoas que podem levar os pets para passear.</p>
                    </div>
                </div>
     
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-5 p-3 p-sm-5" >
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Adestrador</h3>
                        <p>Adestrador são profissionais que são capazes de tirar os maus hábitos de seu pet e os ensinar bons hábitos e até mesmo alguns truques. Ensinando também aos tutores como lidar e cuidar de seus pets de a acordo com a espécie e raça. <p><p><p></p>
                    </div>
                </div>
                <div class=" col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-4 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Veterinário</h3>
                        <p>Veterinário Home Care, são os profissionais que atendem em domicilio, fazendo consultas e exames básicos, aplicando vacinas e fazendo os primeiros socorros do animal. <p><p><p><p><p><p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Services End -->


    <!-- Features Start 
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Special Care</span> On Pets</h1>
                <p class="mb-4">Dolor lorem lorem ipsum sit et ipsum. Sadip sea amet diam sed ut vero no sit. Et elitr stet sed sit sed kasd. Erat duo eos et erat sed diam duo</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Best In Industry</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Emergency Services</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Special Care</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Customer Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Features End -->


    <!-- Pricing Plan Start -->
    <div id="participe" class="container-fluid pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0"><span class="text-primary">Participe !</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <h3 class="display-6 text-vet text-center mt-md-3" >Veterinário</h3>
                            <img class="card-img-top" src="img/price-1.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                               
                                
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Consultas</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Vacinas</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Exames </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Emergência</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-vet btn-block p-3" style="border-radius: 0;">Torne-se um Veterinário!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <h3 class="display-6 text-info text-center mt-md-3" >Adestrador</h3>
                            <img class="card-img-top" src="img/price-2.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Treinar animal </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Auxiliar tutor </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Ensinar truques</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Corrigir maus hábitos</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="users/adestrador/adestrador.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Torne-se um Adestrador!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <h3 class="display-6 text-cu text-center mt-md-3" >Cuidador</h3>
                            <img class="card-img-top" src="img/price-3.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Hospedar </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Pet sitter</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Alimentar </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Levar para passear</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="cadastro front/cuidador.html" class="btn btn-cu btn-block p-3" style="border-radius: 0;">Torne-se um Cuidador!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <h3 class="display-6 text-secondary  text-center mt-md-3 " >Tutor</h3>
                            <img class="card-img-top" src="img/price-4.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, 0);">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Solicite serviços</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Pet em boas mãos </li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Eduque seu pet</li>
                                <li class="list-group-item p-2"><i class=" text-secondary mr-2"></i>Seu pet mais saudavel</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Torne-se um Tutor!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h2 class="text-info mb-3">O que falam sobre a</h2>
                <h1 class="display-4 m-0"><span class="text-primary">Carrapicho</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel ">
                <div class="bg-white mx-4 p-5 ">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
               <button class="justify-content-center d-flex">Solicitar </button><!--centralizar butão-->
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    


    <!-- Footer Start 
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class= "text-info">Carrapicho</span></h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-info mb-4">Onde nos encontrar</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
            </div> 
          
        </div>
    </div>
   <!--Footer End 
--> 

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
   


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>