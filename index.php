<?php

include_once('templates/topo.php'); 
include_once('templates/menu.php');


if (isset($_GET['page'])) {

    $page = $_GET['page'];
    include_once($page . '.php');

} else {

    include_once('conteudo.php');
}

include_once('templates/rodape.php'); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sistema de tarefas</title>
   <style>

   footer {

      background-color: #008B8B; //margem do rodapé

      color: #ffffff;

      padding: 15px;

      text-align: center;

      position: fixed;

      bottom: 0;

      width: 100%;

   }

   header {

      background-color: #008B8B; //margem do header (topo)//

      color: #E0FFFF;

      padding: 20px;

      text-align: center;

   }

   h1 {

      color: #ffffff;

      text-align: center;

   }

   body {

      font-family: Arial, sans-serif;

      margin: 0;

      padding: 0;

      background-color: #adadad; //meio do conteúdo principal

   }

</style>

</head>
<body>

</body>
</html>