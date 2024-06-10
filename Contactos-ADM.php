<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">

<link rel="stylesheet" href="Css/Contactos-ADM.css">
    <title>Contactos-ADM</title>
</head>
<body>
    <div id="loader"></div>
    <header>

       

         <nav class="menu">
            <div class="logo"><a href="#"><img src="Img/Logotipo/image-removebg-preview (20).png" alt="Logo"></a></div>
            <ul>
               
            <li class="menu-bar"><a href="administrador.php">Sair</a></li>

                <li class="menu-bar"><a href="Contactos-ADM.php">Contatos recebidos</a></li>
                
                <li class="menu-bar"><a href="Ficha-De-Ocorrência-ADM.php">Ocorrência registradas</a></li>
              
                
                
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

        
<h3>Contactos recebidos</h3>

      <table >
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Ação</th>
              
            </tr>
        </thead>
        <tbody>
        
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

$sql = "SELECT * FROM dados_contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["assunto"] . "</td>";
        echo "<td><button onclick=\"excluirContato(" . $row["id"] . ")\">Excluir</button></td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum dado encontrado.";
}

$conn->close();
?>

<script>
    function excluirContato(id) {
        if (confirm('Tem certeza que deseja excluir este registro?')) {
            // Envie uma solicitação AJAX para excluir o registro com base no ID
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'excluir_contato.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Resposta recebida do arquivo excluir_contato.php
                    console.log(xhr.responseText);
                    // Atualize a tabela ou faça qualquer outra ação necessária
                    location.reload(); // Atualiza a página após a exclusão
                }
            };
            xhr.send('id=' + id);
        }
    }
</script>

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
 
    <li><a href="#">> Ocorrência registradas</a></li>
  
    <li><a href="#">> Contatos recebidos</a></li>
  </ul>

  <div class="contactos">
    <h3>Contactos</h3>
     <h6>policia@gmail.com</h6>
     <h6>111</h6>


  </div>



</footer>

</body>
<script src="js/Contactos-ADM.js"></script>
<script src="Js/Index.js"></script>
</html>
