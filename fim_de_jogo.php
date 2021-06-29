<?php

session_start();

$pontos = $_SESSION['pontos'];
$maximo_de_pontos = $_SESSION['maximo_de_pontos'];

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
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body onload="animar()">
  <div><h1><a href="javascript:void(0)" onclick="window.location = 'reiniciar.php'">Parabéns, você chegou ao fim da sua jornada.</a></h1></div>
  <div><h1>Pontuação: <u><?php echo $pontos . ' de ' . $maximo_de_pontos ?></u></h1></div>
</body>
</html>