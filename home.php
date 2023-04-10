<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bem-vindo!</h2>
  <form action="cadaluno.php" style= >
    <div class="form" method="post">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Coloque seu email" name="email">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Coloque sua senha" name="senha">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="guardar">Salvar dados</label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</div>
<br>
</body>
</html>


<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");
?>
