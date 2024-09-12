<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';
// Verifique se a conexão foi bem-sucedida
if($db){
    // Exclua o registro com o ID especificado
  $query = "DELETE FROM cadusuario WHERE nome = '13'";

  // Execute a consulta SQL
  $db->exec($query);

  echo "Dados deletados com sucesso na tabela 'cadusuario'!";
}
else {
  echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'zoro'.";
}
?>