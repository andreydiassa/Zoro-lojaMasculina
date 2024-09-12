<!DOCTYPE html>
<html>
  <head>
    <title>Usuários Zoro</title>
  </head>
  <body>
    <a href="tela-de-login.html">Voltar</a>
    <h1>Usuários Zoro</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
      </tr>
      <?php
      // Inclua o arquivo de conexão com o banco de dados
      include 'conexao.php';
      // Verifique se a conexão foi bem-sucedida
      if($db){
        // Prepare a consulta SQL para obter os dados
        $query = "SELECT id, nome, email, senha FROM cadusuario";
        // Execute a consulta SQL
        $result = $db->query($query);
        // Percorra cada linha do resultado
        while ($row = $result->fetchArray()) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['senha'] . "</td>";
          echo "</tr>";
        }
      }
      else {
        echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'agenda'.";
      }
      ?>
    </table>
  </body>
</html>