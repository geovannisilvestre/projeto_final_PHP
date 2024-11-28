<?php
    //Definindo as variavéis para o Banco de Dados:
    $usuario = 'root';
    $senha = '';
    $bdname = 'cadastro';
    $host = 'localhost';

    //Estabelecendo a conexão do front-end,back-end para o Banco de Dados:
    try{
        
       $pdo = new PDO("mysql:host=$host; 
       bdname=$bdname", $usuario, $senha);

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }



?>