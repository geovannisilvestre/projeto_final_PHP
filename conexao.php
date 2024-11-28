<?php

 
 $usuario ="root";
 $senha = "";
 $bdname = "tabela de tarefas";
 $host = "localhost";

 try{

    $pdo = new PDO("mysql:host=$host;bdname=$bdname", $usuario, $senha);

    
 }catch(PDOExeception $e){

    echo $e->getMessage();

 }