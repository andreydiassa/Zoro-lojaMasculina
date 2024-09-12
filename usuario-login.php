<?php
    // Inicia a sessão
    session_start();

    // Variáveis para o nome de usuário e senha
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = '';

    try {
        // Cria uma nova conexão SQLite
        $db = new PDO('sqlite:zoro.db');

        // Prepara a consulta SQL
        $stmt = $db->prepare('SELECT * FROM cadusuario WHERE email = :email AND senha = :senha');

        // Vincula os parâmetros
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        // Executa a consulta
        $stmt->execute();

        // Verifica se algum resultado foi retornado
          if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          // Inicia a sessão e armazena o email e o nome na sessão
          $_SESSION['email'] = $email;
          $_SESSION['usuario'] = $row['nome'];

          // Redireciona o usuário para a página inicial
          header('Location: /index.php');
          exit;
        } else {
            $_SESSION['error'] = 'E-mail de usuário ou senha incorretos.';
            header('Location: /tela-de-login.php');
            exit;
        }
    } catch(PDOException $e) {
        // Trata qualquer erro que possa ocorrer
        echo $e->getMessage();
    }
?>