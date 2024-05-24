<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "banco";

$conexao = mysqli_connect($nome_servidor,$nome_usuario,$senha,$nome_banco);

if (mysqli_connect_error()){
     echo "Conexão não estabelecida ".mysqli_connect_error();
} 
else{
    echo "Conexão Estabelecida com Sucesso";
}
   
    ?>