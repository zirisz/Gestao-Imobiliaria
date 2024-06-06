<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO usuarios (nome, numero, email) VALUES ('$nome', '$numero', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro ao registrar usuário: " . $conn->error;
    }
    
    $conn->close();
}
?>

