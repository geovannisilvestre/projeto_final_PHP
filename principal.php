<?php
include_once("config.inc.php");
$nome = isset($_GET['nome']) ? $_GET['nome'] : ''; 
$email = isset($_GET['email']) ? $_GET['email'] : '';
$tarefas = isset($_GET['tarefas']) ? $_GET['tarefas'] : '';
$datainicial = isset($_GET['data_inicial']) ? $_GET['data_inicial'] : '';
$prazo_final = isset($_GET['prazo_final_entrega']) ? $_GET['prazo_final_entrega'] : '';


$sql = "INSERT INTO login (nome, email, tarefas, data_inicial, prazo_final_entrega)

VALUES ('$nome', '$email', '$tarefas', '$datainicial', '$prazo_final')";

$insert = mysqli_query($conexao,$sql);


$sql = "SELECT nome, email, tarefas, data_inicial, prazo_final_entrega FROM login";
$resultado = $conexao->query($sql);

// Verificar se a consulta retornou resultados
if ($resultado->num_rows > 0) {
    // Exibir os dados em uma tabela HTML
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Tarefas</th>
            <th>Data Inicial</th>
            <th>Prazo Final de Entrega</th>
          </tr>";

    // Exibir cada linha de resultado
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($linha['nome']) . "</td>
                <td>" . htmlspecialchars($linha['email']) . "</td>
                <td>" . htmlspecialchars($linha['tarefas']) . "</td>
                <td>" . htmlspecialchars($linha['data_inicial']) . "</td>
                <td>" . htmlspecialchars($linha['prazo_final_entrega']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum resultado encontrado.";
}

include_once('principal.php'); 

if (isset($_GET['page'])) {

    $page = $_GET['page'];
    include_once($page . '.php');

} else {

    include_once('principal.php');
}

include_once('templates/rodape.php'); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sistema de Tarefas</title>
   <style>

      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      body {
         font-family: 'Palatino', 'URW Palladio L', serif;
         background-color: #101652;
         color: #fff;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         min-height: 100vh;
         text-align: center;
         padding: 20px;
      }



      table {
         margin: 20px auto;
         border-collapse: collapse;
         text-align: center;
         width: 90%;
         border-radius: 10px;
         overflow: hidden;
         box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
         background-color: #fff;
         color: #333;
      }

      th, td {
         padding: 15px;
         border: 1px solid #ddd;
      }

      th {
         background-color: #f2f2f2;
         color: #333;
         font-size: 1.2em;
      }

      td {
         background-color: #fff;
      }

      tr:nth-child(even) td {
         background-color: #f9f9f9;
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
   </style>
</head>
<body>
<h2><a href="inserir.php">Voltar para o inicio</a></h2>
</body>
</html>