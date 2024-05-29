<?php
// Credenciais da base de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "usuarioDB";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$numero = $_POST['numero'];
$email = $_POST['email'];

// Preparar e vincular
$stmt = $conn->prepare("INSERT INTO usuarios (nome, numero, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $numero, $email);

// Executar a declaração
if ($stmt->execute()) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $stmt->error;
}

// Fechar a declaração e a conexão
$stmt->close();
$conn->close();
?>

