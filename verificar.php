<?php
// Recuperar os valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Conectar ao banco de dados
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ficha_de_ocorrencia_base_de_dados";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Verificar a conexão com o banco de dados
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM Administrador WHERE nome = '$username' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciais válidas, redirecionar para a página desejada
    header("Location: Ficha-De-Ocorrência-ADM.php");
    exit();
} else {
    // Credenciais inválidas, exibir mensagem de erro
    echo "Nome de usuário ou senha inválidos.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
