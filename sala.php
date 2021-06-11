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

if (count($salas_restantes) > 0) {
  $sala_escolhida = $salas_restantes[0];
  $sala = json_decode(file_get_contents($sala_escolhida), TRUE);
  array_shift($salas_restantes);

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
</head>
<body>
  <div id="img_div">
    <img src="<?php echo $sala['imagem'] ?>">
  </div>
  <div id="escolhas">
    <h2><a class="escolha" href="escolha.php?resposta=<?php echo $sala['texto_resposta'] . '&imagem=' . $sala['imagem_resposta'] ?>">
      <?php echo $sala['escolha_1']['texto_escolha'] ?>
    </a></h2>
    <h2><a class="escolha" href="escolha.php?resposta=<?php echo $sala['texto_resposta'] . '&imagem=' . $sala['imagem_resposta'] ?>">
      <?php echo $sala['escolha_2']['texto_escolha'] ?>
    </a></h2>
  </div>
</body>
</html>