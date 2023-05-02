
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Log In</title>
</head>

<body>


    <div class="container">
        <div class="form-image">
            <img src="svgs/cat-astronaut-animate.svg">
        </div>

        <div class="form">
            <form action="logmo.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Log in Moderador</h1>
                    </div>
            
                </div>
                <div class="input-group">

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="senha" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>


               
              
            </form>
              <div class="continue-button">
                    <button>Acessar</button>
                    </div>
                    <div class="login-button voltarbtn">
                    <button onclick="window.location.href='../../carrapichoSenac/index.php'"> Voltar</button>

                </div>  
        </div>
    </div>
</body>

</html>