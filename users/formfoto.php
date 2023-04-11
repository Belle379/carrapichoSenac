<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
<?php //if (msg != false) echo "<p> msg </p>";?>
<form action="guardarFotos.php" method="POST" enctype="multipart/form-data">
<label for="foto"> Imagem </label>
<input type="file"  name="foto">
<input type="submit"  value="Enviar" >
</form > 
</body>
</html>