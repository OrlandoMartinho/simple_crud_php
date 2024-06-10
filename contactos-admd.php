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



$sql = "SELECT * FROM dados_contatos";
$resultado = $conn->query($sql);
if ($result->num_rows > 0) {
    // Loop através dos resultados e exibir os dados na tabela
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["assunto"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nenhum dado encontrado.</td></tr>";
}












$conn->close();
?>
