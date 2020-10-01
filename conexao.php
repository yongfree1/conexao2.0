<?php
$servidor="localhost";
$usuario="root";
$senha="123";
$banco="sistema";

//conecta com o SERVIDOR
$conexao=mysqli_connect($servidor,$usuario,$senha) 
or die("Não foi possível conectar ao  Servidor");

//SELECIONA O BANCO DE DADOS ESCOLHIDO
mysqli_select_db($conexao,$banco) 
or die ("Não foi possível conectar ao Banco");


?>