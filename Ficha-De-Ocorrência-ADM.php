<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/Ficha-De-Ocorrência-ADM.css">
    <title>Ficha De Ocorrências-ADM</title>
</head>
<body>
    <div id="loader"></div>
    <header>

       

         <nav class="menu">
            <div class="logo"><a href="#"><img src="Img/Logotipo/image-removebg-preview (20).png" alt="Logo"></a></div>
            <ul>
            <li class="menu-bar"><a href="administrador.php">Sair</a></li>
                <li class="menu-bar"><a href="Contactos-ADM.php">Contactos recebidos</a></li>
                
                <li class="menu-bar"><a href="#">Ocorrência registradas</a></li>
              
                
                
              </ul>

         </nav>
         <div class="contentor">
            <div class="slideshow-container">
                <div class="slide">
                  <img src="Img/Imagens Editadas/Grupo 46.png" alt="Imagem 1"  class="slide-imagem">
                </div>
                <div class="slide">
                  <img src="Img/Imagens Editadas/Grupo 47.png" alt="Imagem 2" class="slide-imagem">
                </div>
                <div class="slide">
                  <img src="Img/Imagens Editadas/Grupo 48.png" alt="Imagem 3"  class="slide-imagem">
                </div>

                <div class="slide">
                    <img src="Img/Imagens Editadas/Grupo 49.png" alt="Imagem 3"  class="slide-imagem">
                  </div>
                <div class="slideshow-dots"></div>
              </div>
            <p class="texto">Juntos pela segurança: registre suas ocorrências
                e faça a diferença em nossa comunidade.
            </p>
         </div>

        
    </header>


    <div class="centro">

        
        <h1>Ocorrências recebidas</h1>
        <div class="search-form">
  <input type="text" id="search-input" placeholder="Digite o nome...">
  <button onclick="searchTable()" id="search-button">Pesquisar</button>

</div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Localização</th>
                    <th>Data de Ocorrência</th>
                    <th>Tipo de Ocorrência</th>
                    <th>Descrição</th>
                    <th>Acção</th>
                </tr>
            </thead>
            <tbody id="dados-recebidos">

            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_ocorrencia_base_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se uma solicitação de exclusão foi feita
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // Consulta SQL para excluir o registro com base no ID
    $deleteSql = "DELETE FROM ficha_de_ocorrencia WHERE id = $id";
    
    // Executa a consulta de exclusão
    if ($conn->query($deleteSql) === TRUE) {
      
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
}

// Consulta SQL para selecionar os dados da tabela
$sql = "SELECT id, nome, localizacao, data_de_ocorrencia, tipo_de_ocorrencia, descricao FROM ficha_de_ocorrencia";

// Executa a consulta SQL
$resultado = $conn->query($sql);

// Verifica se existem registros retornados
if ($resultado->num_rows > 0) {
    // Loop para percorrer cada registro e adicionar à tabela HTML
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["localizacao"] . "</td>";
        echo "<td>" . $row["data_de_ocorrencia"] . "</td>";
        echo "<td>" . $row["tipo_de_ocorrencia"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td><a href=\"?delete=" . $row["id"] . "\" onclick=\"return confirm('Tem certeza que deseja excluir este registro?');\" class=\"delete-button\">Excluir</a></td>";
        echo "</tr>";
    }
} else {
    echo "Não foram encontrados registros na tabela.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>




            </tbody>
        </table>
      
      
</div>

<footer class="footer">
  <img src="Img/Imagens Editadas/Grupo 50.png" alt="" class="tema">

  <img src="Img/Logotipo/image-removebg-preview (-1.png" alt="Logotipo" class="logotipo">
  <p class="texto">
    Nossa equipe está empenhada <br>
em oferecer um processo simplificado <br>
de preenchimento da ficha de ocorrência, <br>
garantindo a confidencialidade e segurança dos seus dados<br>
  </p>
  

  <ul class="menu">
    <h3 class="titulo-menu">Menu</h3>
    <li><a href="#">> Ficha de ocorrÊncia</a></li>
  
    <li><a href="#">> Contactos</a></li>
  </ul>

  <div class="contactos">
    <h3>Contactos</h3>
     <h6>policia@gmail.com</h6>
     <h6>111</h6>


  </div>



</footer>

</body>

<script src="Js/Index.js"></script>
<script src="Js/Ficha-De-Ocorrência-ADM.js"></script>
</html>