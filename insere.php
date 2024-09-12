<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';
// Verifique se a conexão foi bem-sucedida
if($db){
  // Pegue os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  // Prepare a consulta SQL para inserir os dados
  $query = "INSERT INTO cadusuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  
  // Execute a consulta SQL
  $db->exec($query);

  echo '<script>alert("Cadastro efetuado com sucesso!")</script>';
  echo '<script>window.location.href="tela-de-login.html"</script>';

}
else {
  echo '<script>alert("Desculpe, não foi possível conectar ao banco de dados. Cadastro não efetuado!")</script>';
  echo '<script>window.location.href="cadastro.html"</script>';
}
?>