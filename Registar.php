<?php
// Verifica se os dados foram submetidos via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Conecta-se ao banco de dados (substitua os valores conforme necessário)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    
    // Prepara a consulta SQL para inserir os dados na tabela de usuários
    $sql = "INSERT INTO usuarios (nome, numero, email) VALUES ('$nome', '$numero', '$email')";
    
    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro ao registrar usuário: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

