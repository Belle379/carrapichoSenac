<?php
session_start();
include "perfilzinho/conexao.php";
?>

<!DOCTYPE html>
<html lang="Pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/feed2.css" rel="stylesheet">
  <link href="css/feed3.css" rel="stylesheet">
  <link href="css/carouselle.css" rel="stylesheet">
  <link href="css/flickitty.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'
    type='text/css'>
  <link rel='stylesheet'
    href='https://fonts.googleapis.com/css2?family=Bebas+Neue&ampfamily=Figtree:wght@300;600&ampdisplay=swap'>
  <link rel="stylesheet" href="css/feedcard.css">
  <script src="flickty.js"></script>
  <title> Moderador </title>
</head>

<body>


  <!--Inicio da Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <img onclick="window.location.href='index.php'" src="users/tutor/assets/img/apple-icon.png" width="50px"
        height="50px" alt="" />
      <a class="navbar-brand"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
          
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link " href="sair.php" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
            SAIR
            </a>

          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Fim da Nav bar -->

  <!--Inicio do MA -->
  <div class="MA">

    <!-- Flickity HTML init -->
    <!--config carroseul-->
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
      <!--fim config carroseul-->
      <!--card-->
      <?php


      $apresentar = "SELECT id_user, nome_user, fone_user, tpuser, uf, bairro, 
      petSitter, hospedeiro, passeador, vacina, exame, consulta, emergencia, plantao
      FROM  tb_user, tb_endereco, tb_servicocuidador, tb_servicovet";
      $resultado = mysqli_query($conexao, $apresentar);
      $colunas = mysqli_fetch_array($resultado);

      if ($colunas) {
        do {
          ?>
     
            <div class="gallery-cell">
              <section class="articles">
                <article>
                  <div class="article-wrapper">
                   
                    <div class="article-body" >
                       <div class="cabecalho">

                      <h2> <?php echo $colunas['nome_user'] ?></h2>
                      <h6>
                        <?php echo $colunas['bairro'] ?> - <?php echo $colunas['uf'] ?>
                      </h6>
                      <h5>
                        <?php echo  $colunas['tpuser'] .  "</h5>";
                       echo "<td> <hr>";
                      
                        if ($colunas['tpuser'] =="cuidador"){
                          echo "<h5>Serviços: </h5> ";
                          echo $colunas['petSitter'] == 1 ? "<h6> Pet Sitter</h6>" : "" . "" ; 
                          echo $colunas['hospedeiro']== 1 ? "<h6>Hospedeiro</h6>" : ""  . ""; 
                          echo $colunas['passeador']== 1 ? "<h6>Passeador</h6>" : "" ; 
                        } elseif ($colunas['tpuser'] =="veterinario"){
                          echo $colunas['vacina'] == 1 ? "<h6> Aplico vacinas</h6>" : "" . "<p>";
                          echo $colunas['exame']== 1 ? "<h6>Faço exames</h6>" : "" . "<p>";
                          echo $colunas['consulta']== 1 ? "<h6>Faço consulta</h6>" : "" . "<p>"; 
                          echo $colunas['emergencia']== 1 ? "<h6>Atendo emergencias</h6>" : "" . "<p>"; 
                         } else{
                          echo "Adestrador.";
                         }
                    
                  ?>
                      
                      </div>


                      <div class="desccard">
                        
                        <p>
                          <?php  echo $colunas['descricao'] ?>
                        </p>
                        


        
          <div class="footercard"> <a href="Excluiruser.php?p=excluir&user=<?php echo $colunas['id_user'];?>" class="read-more">
            Banir <?php echo $colunas['nome_user'] ?> <span class="sr-only" ></span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" 
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </div>

        </a>
                        </div>
      </div>
      </div>
      </div>
    <?php } while ($colunas = mysqli_fetch_array($resultado))
        ?>
    <?php
        
      }
       ?>
       
    
  </div>
  </div>


</body>

</html>