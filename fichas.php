<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_ocorrencia_base_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Captura os valores do formulário
$nome = $_POST['nome'];
$localizacao = $_POST['localizacao'];
$data_de_ocorrencia = $_POST['data'];
$tipo_de_ocorrencia = $_POST['tipo'];
$descricao = $_POST['descricao'];

// Prepara a consulta SQL
$sql = "INSERT INTO ficha_de_ocorrencia (nome, localizacao, data_de_ocorrencia, tipo_de_ocorrencia, descricao)
        VALUES ('$nome', '$localizacao', '$data_de_ocorrencia', '$tipo_de_ocorrencia', '$descricao')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "A seu pedido foi recebido o Sr(a)será atendido o mais breve possível!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
