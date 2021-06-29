<?php

session_start();

session_destroy();

header('Refresh: 1; URL = index.php');

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
  <h1 style="animation: aparecer forwards .5s; opacity: 0;">Aguarde...</h1>
</body>
</html>