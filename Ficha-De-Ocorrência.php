<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/Ficha-De-Ocorrência.css">
    <title>Ficha De Ocorrências</title>
</head>
<body>
    <div id="loader"></div>
    <header>

       

         <nav class="menu">
            <div class="logo"><a href="#"><img src="Img/Logotipo/image-removebg-preview (20).png" alt="Logo"></a></div>
            <ul>
               
            <li class="menu-bar"><a href="Contactos.php">Contactos</a></li>
                <li class="menu-bar"><a href="Ficha-De-Ocorrência.php">Ficha de ocorrência</a></li>
                <li class="menu-bar"><a href="Index.php">Página inicial</a></li>
                
                
              </ul>

         </nav>
         <div class="contentor">
           
               
                  <img src="Img/Imagens Editadas/Grupo 47.png" alt="Imagem 1"  class="slide-imagem">
                
            <p class="texto">Juntos pela segurança: registre suas ocorrências
                e faça a diferença em nossa comunidade.
            </p>
         </div>

        
    </header>


    <div class="centro">

        <form action="fichas.php" class="formulario" method="POST">
            <div class="campo">
              <label for="nome">Nome:</label>
              <input type="text" id="nome" name="nome" required>
            </div>
          
            <div class="campo">
              <label for="localizacao">Localização:</label>
              <input type="text" id="localizacao" name="localizacao" required>
            </div>
          
            <div class="campo">
              <label for="data">Data de Ocorrência:</label>
              <input type="date" id="data" name="data" required>
            </div>
          
            <div class="campo">
              <label for="tipo">Tipo de Ocorrência:</label>
              <select id="tipo" name="tipo" required>
                <option value="">Selecione o tipo</option>
                <option value="incendio">Incêndio</option>
                <option value="roubo">Roubo</option>
                <option value="acidente">Acidente</option>
               
              </select>
            </div>
          
            <div class="campo">
              <label for="descricao">Descrição:</label>
              <textarea id="descricao" name="descricao" required></textarea>
            </div>
          
            <input type="submit" value="Enviar" class="botao">
          </form>
          
      
      
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
    <li><a href="#">> Página Inicial</a></li>
    <li><a href="#">> Ficha de ocorrÊncia</a></li>
    <li><a href="#">> Procedimentos</a></li>
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
</html>