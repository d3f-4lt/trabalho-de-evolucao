<?php

session_start();

if (!isset($_SESSION['ultima_combinação'])) {
  $_SESSION['ultima_combinação'] = 0;
}

if (!isset($_SESSION['pontos']) || !isset($_SESSION['vida'])) {
  $_SESSION['pontos'] = 0;
  $_SESSION['maximo_de_pontos'] = count(glob('salas/*.json'));
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho de Evolução - Grupo 7</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/animacoes.css">
</head>
<body>
  <h1><a href="sala.php">Jogar</a></h1>
</body>
</html>