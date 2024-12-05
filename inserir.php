<h1>Esse é o nosso sistema de Tarefas</h1>

<h1>Preencha os dados abaixo:</h1>

<form action="Insere_banco_dados.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="tarefas">Tarefa:</label>
    <input type="text" id="tarefas" name="tarefas" required><br><br>

    <label for="data inicial">Data inicial:</label>
    <input type="date" id="data_inicial" name="data_inicial" required><br><br>

    <label for="data de entrega limite">Prazo final:</label>
    <input type="date" id="prazo_final_entrega" name="prazo_final_entrega" required><br><br>

    <input type="submit" value="Enviar">
</form>

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
      }

      header {
         background-color: #000;
         color: #E0FFFF;
         padding: 20px;
         width: 100%;
         text-align: center;
         border-radius: 0 0 20px 20px;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
      }

      form {
         background-color: #1A1A40;
         color: #E0FFFF;
         padding: 40px;
         margin: 20px 0;
         max-width: 500px;
         border-radius: 20px;
         box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.7);
         text-align: left;
      }

      label {
         display: block;
         margin-bottom: 8px;
         font-size: 1rem;
         color: #E0FFFF;
      }

      input {
         padding: 10px;
         width: 100%;
         border-radius: 10px;
         border: none;
         margin-bottom: 20px;
         background-color: #fff;
         color: #000;
      }


   </style>
</head>
<body>
</body>
</html>