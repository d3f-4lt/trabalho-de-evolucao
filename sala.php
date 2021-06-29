<?php

session_start();

if (!isset($_SESSION['salas_restantes'])) {
  $salas_restantes = glob('salas/*.json');
  
  do {
    shuffle($salas_restantes);
  } while ($salas_restantes == $_SESSION['ultima_combinação']);

  $_SESSION['salas_restantes'] = $salas_restantes;
  $_SESSION['ultima_combinação'] = $salas_restantes;
} else {
  $salas_restantes = $_SESSION['salas_restantes'];
}

if (isset($_SESSION['respondeu']) && !empty($_SESSION['respondeu'])) {
  if ($_SESSION['respondeu'] == 1) {
    array_shift($salas_restantes);
    unset($_SESSION['respondeu']);
  }
}

if (count($salas_restantes) > 0) {
  $sala_escolhida = $salas_restantes[0];
  $sala = json_decode(file_get_contents($sala_escolhida), TRUE);
  $_SESSION['salas_restantes'] = $salas_restantes;
} else {
  header('Location: fim_de_jogo.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho de Evolução - Grupo 7</title>
  <link rel="stylesheet" href="css/sala.css">
  <link rel="stylesheet" type="text/css" href="css/animacoes.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body onload="animar()">
  <form action="escolha.php" method="post" id="form">
    <input type="text" name="resposta" value="<?php echo $sala['texto_resposta'] ?>">
    <input type="text" name="imagem" value="<?php echo $sala['imagem_resposta'] ?>">
    <input type="submit" value="">
  </form>
  <div id="img_div">
    <?php if (isset($sala['texto_imagem']) && !empty($sala['texto_imagem'])): ?>
      <h2 id="h2_texto_imagem"><?php echo $sala['texto_imagem'] ?></h2>
    <?php endif ?>
    <img src="<?php echo $sala['imagem'] ?>">
    <a id="reiniciar" href="reiniciar.php">reiniciar</a>
  </div>
  <div id="escolhas">
    <div class="h2_escolha">
      <h2 class="h2_escolha"><a class="escolha" href="javascript:void(0)" onclick="document.getElementById('form').submit()">
        <?php if (isset($sala['escolha_1']['imagem_escolha']) && !empty($sala['escolha_1']['imagem_escolha'])): ?>
          <img src="<?php echo $sala['escolha_1']['imagem_escolha'] ?>" class="img_escolha">
        <?php endif ?>
        <?php echo $sala['escolha_1']['texto_escolha'] ?>
      </a></h2>
    </div>
    <div class="h2_escolha">
      <h2 class="h2_escolha"><a class="escolha" href="javascript:void(0)" onclick="document.getElementById('form').submit()">
        <?php if (isset($sala['escolha_2']['imagem_escolha']) && !empty($sala['escolha_2']['imagem_escolha'])): ?>
          <img src="<?php echo $sala['escolha_2']['imagem_escolha'] ?>" class="img_escolha">
        <?php endif ?>
        <?php echo $sala['escolha_2']['texto_escolha'] ?>
      </a></h2>
    </div>
  </div>
</body>
</html>