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
  <link rel="stylesheet" type="text/css" href="css/animacoes.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body onload="animar()">
  <?php if (isset($_POST['imagem']) && !empty($_POST['imagem'])): ?>
    <div id="img_div">
      <img src="<?php echo $_POST['imagem'] ?>">
    </div>
  <?php endif ?>
  <div id="texto">
    <div>
      <h2><a id="resposta" href="sala.php" onclick="<?php $_SESSION['respondeu'] = 1 ?>"><?php echo $_POST['resposta'] ?></a></h2>
    </div>
  </div>
</body>
</html>