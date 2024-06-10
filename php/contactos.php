<?php
$servername = "localhost"; // substitua pelo nome do seu servidor
$username = "root"; // substitua pelo nome de usuário do seu banco de dados
$password = ""; // substitua pela senha do seu banco de dados
$dbname = "contactos"; // nome do banco de dados

// Estabelecer a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida com o banco de dados";

// Fechar a conexão
$conn->close();
?>
