<?php
include_once("config.inc.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$tarefas = $_POST['tarefas'];
$datainicial = $_POST['data_inicial'];
$prazo_final = $_POST['prazo_final_entrega'];

$sql = "INSERT INTO login (nome, email, tarefas, data_inicial, prazo_final_entrega)

VALUES ('$nome', '$email', '$tarefas', '$datainicial', '$prazo_final')";

$insert = mysqli_query($conexao,$sql);


mysqli_close($conexao);

?>


<title>Confirmação</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #000; 
            color: #fff; 
            font-family: 'Arial', sans-serif;
        }

        .container {
            text-align: center;
            background-color: #1a1a1a; 
            padding: 40px 20px;
            border-radius: 20px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
            max-width: 400px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        h2 {
            margin: 20px 0;
            font-size: 1.2rem;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s, background-color 0.3s;
            padding: 10px 20px;
            border-radius: 10px;
            border: 2px solid #007bff;
        }

        a:hover {
            color: #fff;
            background-color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Dados recebidos com sucesso!</h1>
    <h2><a href="principal.php">Acesse aqui suas Tarefas</a></h2>
</div>

</body>
</html>