<?php
include_once("config.inc.php");

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$tarefas = $_REQUEST['tarefas'];
$datainicial = $_REQUEST['data_inicial'];
$prazo_final = $_REQUEST['prazo_final_entrega'];

$sql = "INSERT INTO login_tarefas (nome, email, tarefas, data_inicial, prazo_final_entrega)
VALUES ('$nome', '$email', '$tarefas', '$datainicial', '$prazo_final')";
$insert = mysqli_query($conexao,$sql);
mysqli_close($conexao);
?>


    <title>Confirmação</title>

</head>
<body>
    <h1>Dados recebidos com Sucesso!</h1>
</body>
</html>