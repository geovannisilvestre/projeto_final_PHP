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

</body>
</html>
