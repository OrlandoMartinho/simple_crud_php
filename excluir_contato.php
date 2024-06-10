<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_ocorrencia_base_de_dados";

// Verificar se o ID foi fornecido
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Estabelecer a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para excluir o registro com base no ID
    $deleteSql = "DELETE FROM dados_contatos WHERE id = $id";

    // Executar a consulta de exclusão
    if ($conn->query($deleteSql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do contato não fornecido.";
}
?>
