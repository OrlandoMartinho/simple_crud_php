<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_ocorrencia_base_de_dados";

// Estabelecer a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


// Verificar se os valores foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];

    // Inserir os valores na tabela
    $sql = "INSERT INTO dados_contatos (nome, email, assunto) VALUES ('$nome', '$email', '$assunto')";
    if ($conn->query($sql) === TRUE) {
        echo "Obrigado por nos contactar entraremos em contacto o mais breve possível";
    } else {
        echo "Erro ao inserir valores: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
