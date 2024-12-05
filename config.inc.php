<?php
// Conexão com servidor MySQL
$conexao = mysqli_connect("localhost","root","");
// Conexão com o banco MySQL chamado projeto
$banco_dados = mysqli_select_db($conexao,"cadastro");

if($conexao){
echo "";
}else{
echo "Erro na conexão com banco de dados.";
}
?>