<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("header.php");

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

echo "Nome: $nome<br>";
echo "RG: $rg<br>";
echo "CPF: $cpf <br>";
echo "Matrícula: $matricula<br>";
echo "Telefone: $telefone <br>";
echo "Endereço: $endereco<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
</head>
<body>

<form class="form" method="post" action="editaraluno.php">
     <input type="hidden" name="nome" value=<?php echo $nome ?>>
     <input type="hidden" name="rg" value=<?php echo $rg ?>>
     <input type="hidden" name="cpf" value=<?php echo $cpf ?>>
     <input type="hidden" name="matricula" value=<?php echo $matricula ?>>
     <input type="hidden" name="telefone" value=<?php echo $telefone ?>>
     <input type="hidden" name="endereco" value=<?php echo $endereco ?>>

<button type="submit" class="btn">
<b>Alterar</b></button> 
<br>
</form>

</body>
</html>

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("footer.php");
?>
