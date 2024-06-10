<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos";

// Estabelecer a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->close();
?>
