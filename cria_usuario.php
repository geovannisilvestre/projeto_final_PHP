<?php
    //Ao utilizar o {require("connector.php");} e a condição abaixo, o usuario criado irá ter seus dados enviados
    //Para o arquivo "connector.php", onde o mesmo fará a conexão e envio dos dados que foram criados, para o Banco de Dados.
    require("connector.php");

    if(isset($_POST)){


        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        $query = "INSERT INTO login (nome, sobrenome) VALUES ('$nome', '$sobrenome')";


        header("Location: index.php?criado=sucesso");
    }
?>