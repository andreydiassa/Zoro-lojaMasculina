<?php
$db = new SQLite3('zoro.db');
if($db){
  $query = "CREATE TABLE IF NOT EXISTS cadusuario (id INTEGER PRIMARY
  KEY, nome TEXT, email TEXT, senha TEXT)";
  $db->exec($query);
  
//echo "Conexão com o banco de dados SQLite 'zoro' criado com sucesso!";
} else {
echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'zoro'.";
}
?>