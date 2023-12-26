<script>
  function alerta() {
    alert('Para realizar esta ação deve estar logado!');
  }
</script>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/oculos.png" type="image/x-icon">
    <link rel="stylesheet" href="../home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/history.css">
    <link rel="stylesheet" href="../sobre_nos.css">
    <title>Sobre Nós</title>
</head>
<body>
    
       <!-- -------------------MENU DESKTOP------------------- -->


    <header>
    <nav class="menu-desktop">
      <div>
        <ul style="padding-top:1%;" class="submenu-desktop">
        <li style="margin-right:3%;" class="logo01-desktop"><img width="35px" src="../logos/Oxford-University-Circlet.svg.png" width="200px" alt="logo"></li>


          <li class="listas-desktop"><a class="links-desktop" href="home_publico.php" target="_top">Home</a></li>

          <li class="listas-desktop">
            
         <a class="links-desktop  matricula" href="#">Matrícula</a>
        
          <div class="sub-matricula" style="position:absolute; top:0; left:0; background-color:rgb(37, 37, 37); width:100%; height:50px;; padding:10px; border:2px solid darkgray; animation: vir .60s alternate linear; overflow: hidden;">
          <ul style="display:flex; justify-content: space-around; list-style:none; padding:15px;">
             <li class="listas-desktop" style=" border-right: 2px solid darkgray; padding-right:20px; color:grey; font-size:30px;" class="listas-desktop">Matrículas:</li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula ATL & Iniciação</a></li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Iº & IIº Ciclo</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Ensino Médio</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Inscrições de AEC</a></li>
          </ul>
        </li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Confirmação</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Uniformes</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Pagamentos</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="aec_publico.php">AEC</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="atl_publico.php">ATL</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php" target="_top">Biblíoteca</a></li>

          <li class="listas-desktop"><a style="color: white;" class="links-desktop" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:10%;" class="links-desktop" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/comentario-alt.png" alt="notificacao"></a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:15%;" class="links-desktop" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/usuario-do-circulo.png" alt="entrar"></a></li>
        </ul>

        
      </div>
    </nav>

    <!-- -------------------MENU MOBILE------------------- -->

    <nav>

    <div class="barra-dark-grey"><div class="log"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:90%; text-decoration:none; color:white;" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/usuario-do-circulo.png" alt="entrar"></a></div>

    <div class="not"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:80%; text-decoration:none; color:white;" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/comentario-alt.png" alt="notificacao"></a></div>
    </div>
      <div class="ico-menu"><img src="../icons\588a6507d06f6719692a2d15.png" alt="Menu" width="40px"></div>
      <div class="menu-mobile">
        <ul class="submenu-mobile">
          <li class="logo01-mobile">Menu:</li>
          
          <li class="listas-mobile"><a class="links-mobile" href="home_publico.php" target="_top">Home</a></li>

          <li style="border-bottom:none;" class="listas-mobile">
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula ATL & Iniciação</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Iº & IIº Ciclo</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Ensino Médio</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Inscrições de AEC</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php">Confirmação</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php">Uniformes</a></li>

          <li class="listas-mobile"><a class="links-mobile"
          onclick="alerta()" href="../login.php">Pagamentos</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="aec_publico.php">AEC</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="atl_publico.php">ATL</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php" target="_top">Biblioteca</a></li>

          <li class="listas-mobile"><a  style="color: white;" class="links-mobile" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

        </ul>

      </header>

    <section class="info_ser">
        <h1>QUEM SOMOS?</h1>
    </section>

    <main class="about">
        <div class="about_conteiner">
            <h1 >WebSchool</h1>
            <img src="../img/about/imagem.jpg" alt="" width="400">
        </div>

        <div class="about_info">
            <h1>O que fazemos!?</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dicta dolorem fugit neque dolor? Beatae, ipsam deserunt perferendis, aspernatur pariatur totam voluptatem impedit, obcaecati accusantium quo laborum laudantium culpa cum?</p>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dicta dolorem fugit neque dolor? Beatae, ipsam deserunt perferendis, aspernatur pariatur totam voluptatem impedit, obcaecati accusantium quo laborum laudantium culpa cum?</p>

            <a href="#"><button>Saber Mais</button></a>
        </div>

        
    </main>

    <main class="about">
      
        <div class="about_info">
            <h1>Conheça nossa equipe</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dicta dolorem fugit neque dolor? Beatae, ipsam deserunt perferendis, aspernatur pariatur totam voluptatem impedit, obcaecati accusantium quo laborum laudantium culpa cum?</p>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dicta dolorem fugit neque dolor? Beatae, ipsam deserunt perferendis, aspernatur pariatur totam voluptatem impedit, obcaecati accusantium quo laborum laudantium culpa cum?</p>

            <a href="#"><button>Saber Mais</button></a>
        </div>

          <div class="about_conteiner info_ab">
            <img src="../img/about/2.jpg" alt="" width="400">
        </div>

    </main>

    <!-- -------------------RODAPÉ------------------- -->

    <footer>
    <ul>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/facebook.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/instagram.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/snapchat.png" alt=""></i></a></li>
        </ul>
        <p><i class="fa-solid fa-copyright"></i> Todos os direitos reservados - WebSchool 2023</p>
    
    </footer>
</body>
</html>