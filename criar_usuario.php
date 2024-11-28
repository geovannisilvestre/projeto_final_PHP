<?PHP

  require("conexao.php");

  if(isset($_POST)){
   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tarefa = $_POST['tarefa'];
    $data_de_conclusao = $_POST['data_de_conclusao'];

    $query = "INSERT INTO bdtarefas (nome, email, tarefa, data_de_conclusão) VALUES ('$nome', '$email', '$tarefa', '$data_de_conclusao')";

    header("location: index.php?criado=sucesso");

  }