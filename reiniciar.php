<?php

session_start();

unset($_SESSION['salas_restantes']);

header('Location: index.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho de Evolução - Grupo 7</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <h1>Aguarde...</h1>
</body>
</html>