<!DOCTYPE html>
<html lang="pt">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Biblioteca</title>
</head>
<body>
    <!-- -------------------MENU DESKTOP------------------- -->

    <header>
    <nav class="menu-desktop">
      <div>
        <ul style="padding-top:1%;" class="submenu-desktop">
        <li style="margin-right:3%;" class="logo01-desktop"><img width="35px" src="logos/Oxford-University-Circlet.svg.png" width="200px" alt="logo"></li>


          <li class="listas-desktop"><a class="links-desktop" href="home.php" target="_top">Home</a></li>

          <li class="listas-desktop">
            
         <a class="links-desktop  matricula" href="#">Matrícula</a>
        
          <div class="sub-matricula" style="position:absolute; top:0; left:0; background-color:rgb(37, 37, 37); width:100%; height:50px;; padding:10px; border:2px solid darkgray; animation: vir .60s alternate linear; overflow: hidden;">
          <ul style="display:flex; justify-content: space-around; list-style:none; padding:15px;">
             <li class="listas-desktop" style=" border-right: 2px solid darkgray; padding-right:20px; color:grey; font-size:30px;" class="listas-desktop">Matrículas:</li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_iniciacao.php">Matrícula ATL & Iniciação</a></li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_psc.php">Matrícula Iº & IIº Ciclo</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_medio.php">Matrícula Ensino Médio</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="inscricoes_aec.php">Inscrições de AEC</a></li></li>
          </ul>
        </li>

          <li class="listas-desktop"><a class="links-desktop" href="confirmacao.php">Confirmação</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="uniformes.php">Uniformes</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="pagamentos.php">Pagamentos</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="aec.php">AEC</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="atl.php">ATL</a></li>

          <li class="listas-desktop"><a style="color: white;"  class="links-desktop" href="biblioteca.php" target="_top">Biblíoteca</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="sobre_nos.php" target="_top">SobreNós</a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:10%;" class="links-desktop" href="notificacoes.php" target="_top"><img width="30px" src="icons/comentario-alt.png" alt="notificacao"></a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:15%;" class="links-desktop" href="login.php" target="_top"><img width="30px" src="icons/usuario-do-circulo.png" alt="entrar"></a></li>
        </ul>

        
      </div>
    </nav>

    <!-- -------------------MENU MOBILE------------------- -->

    <nav>

    <div class="barra-dark-grey"><div class="log"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:90%; text-decoration:none; color:white;" href="login.php" target="_top"><img width="30px" src="icons/usuario-do-circulo.png" alt="entrar"></a></div>

    <div class="not"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:80%; text-decoration:none; color:white;" href="notificacoes.php" target="_top"><img width="30px" src="icons/comentario-alt.png" alt="notificacao"></a></div>
    </div>
      <div class="ico-menu"><img src="icons\588a6507d06f6719692a2d15.png" alt="Menu" width="40px"></div>
      <div class="menu-mobile">
        <ul class="submenu-mobile">
          <li class="logo01-mobile">Menu:</li>
          
          <li class="listas-mobile"><a class="links-mobile" href="home.php" target="_top">Home</a></li>

          <li class="listas-mobile"><a class="links-desktop" href="matricula_iniciacao.php">Matrícula ATL & Iniciação</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="matricula_psc.php">Matrícula Iº & IIº Ciclo</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="matricula_medio.php">Matrícula Ensino Médio</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="inscricoes_aec.php">Inscrições de AEC</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="confirmacao.php">Confirmação</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="uniformes.php">Uniformes</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="pagamentos.php">Pagamentos</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="aec.php">AEC</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="atl.php">ATL</a></li>

          <li class="listas-mobile"><a style="color: white;"  class="links-mobile" href="biblioteca.php" target="_top">Biblioteca</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="sobre_nos.php" target="_top">SobreNós</a></li>

        </ul>

      </header>
  <!-- -------------------CORPO------------------- -->

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens\pexels-cottonbro-studio-6344239.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">Biblioteca</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">Encontre aqui as melhores obras literarias.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens\pexels-yan-krukau-8199562.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">Biblioteca</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">Encontre aqui as melhores obras literarias.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        
  <!-- -------------------RODAPÉ------------------- -->

   <footer>
    <ul>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/facebook.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/instagram.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/snapchat.png" alt=""></i></a></li>
        </ul>
        <p><i class="fa-solid fa-copyright"></i> Todos os direitos reservados - WebSchool 2023</p>
    
    </footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>