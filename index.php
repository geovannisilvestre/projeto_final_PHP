<?php

include_once('templates/topo.php');




if (isset($_GET['page'])) {

    $page = $_GET['page'];
    include_once($page . '.php');

} else {

    include_once('inserir.php');
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

      button {
         display: block;
         width: 100%;
         padding: 10px 20px;
         background-color: #007bff;
         color: white;
         border: none;
         border-radius: 10px;
         cursor: pointer;
         transition: background-color 0.3s;
         text-align: center;
      }

      button:hover {
         background-color: #0056b3; 
      }
   </style>
</head>
<body>
</body>
</html>