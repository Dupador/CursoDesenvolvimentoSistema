<?php
// Configurações do banco de dados
$dsn = 'mysql:host=localhost;port=7306;dbname=banco_de_dados';
$username = 'root';
$password = '';

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO($dsn, $username, $password);
    
    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];
    // Prepara a instrução SQL para inserir os dados
    $sql = "INSERT INTO usuarios (nome, email, nivel) VALUES (:nome, :email, :nivel)";
    $stmt = $pdo->prepare($sql);
    
    // Executa a instrução SQL, vinculando os parâmetros
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam('nivel', $nivel, PDO::PARAM_STR);
    $stmt->execute();
    
    echo "Registro inserido com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro ao inserir registro: " . $e->getMessage();
}

// Fecha a conexão PDO
$pdo = null;
?>
