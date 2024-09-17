<?php

// Configurações do banco de dados
$host = 'localhost';
$dbname = 'phptips';
$username = 'root';
$password = '';

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para inserir dados
    $sql = "INSERT INTO posts (title, description, cover) VALUES (:title, :description, :cover)";
    $stmt = $pdo->prepare($sql);

    // Dados para inserção
    $params = [
        ':title' => 'Título de Teste',
        ':description' => 'Descrição de Teste',
        ':cover' => 'imagem_de_teste.jpg'
    ];

    // Executa a consulta
    if ($stmt->execute($params)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Falha ao inserir dados.";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
