<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir da dados</title>
</head>
<body>

    <form action="criar_usuario.php" method="POST">
        nome:
        <input type="text"
         name="nome"><br>

       email:
        <input type="text"
        name="email"><br>

        tarefa:
        <input type="text"
        name="tarefa"><br>

        data limite
        <input type="date"
         name="data_de_conclusao"><br><br>

        <input type="submit"
         name="enviar"><br>

    </form>

</body>
</html>