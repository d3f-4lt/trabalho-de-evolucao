<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho de Evolução - Grupo 7</title>
  <link rel="stylesheet" href="css/escolha.css">
</head>
<body>
  <?php if (isset($_GET['imagem']) && !empty($_GET['imagem'])): ?>
    <div id="img_div">
      <img src="<?php echo $_GET['imagem'] ?>">
    </div>
  <?php endif ?>
  <div id="texto">
    <h2><a id="resposta" href="sala.php"><?php echo $_GET['resposta'] ?></a></h2>
  </div>
</body>
</html>