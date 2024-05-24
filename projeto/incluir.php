<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com mysqli</title>
</head>
<body>
    <h3>Novo Produto</h3>
<?php 
  include_once('conexao.php');
  $nome= $_POST['nome'];
  $email= $_POST["email"];
  $data= $_POST["data"];
  $senha= $_POST["senha"];
  $confirsenha= $_POST["confirsenha"];
  $regiao= $_POST["regiao"];
  
  $sqlinsert = "insert into Cadastro (nome, email, data, senha, regiao) values ('$nome', '$email', '$data', '$senha', $regiao)";

  $resultado = mysqli_query($conexao, $sqlinsert);
  if (!$resultado){
    echo '<br>';
    die('Query Inválida: ' .mysqli_error($conexao));
  } else{
    echo "<br>Registro Cadastrado com Sucesso";
  }
  
  mysqli_close($conexao);

?>
<br><br>
<input type='button' onclick="window.location='inicio.html';" value="continuar">
</body>
</html>-