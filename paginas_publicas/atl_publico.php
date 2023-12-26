<script>
  function alerta() {
    alert('Para realizar esta ação deve estar logado!');
  }
</script>

<!DOCTYPE html>
<html lang="pt">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>ATL</title>
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

          <li  class="listas-desktop"><a style="color: white;" class="links-desktop" href="atl_publico.php">ATL</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php" target="_top">Biblíoteca</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

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

          <li class="listas-mobile"><a style="color: white;" class="links-mobile" href="atl_publico.php">ATL</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php" target="_top">Biblioteca</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

        </ul>

      </header>
  <!-- -------------------CORPO------------------- -->

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens\school-2761394_1280.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">ATL</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">O melhor lar para o seu filho na sua ausência!</p>
          <a href="../login.php"><input onclick="alerta()" class="btn1" type="button" value="Saber Mais"></a>
        </div>
      </div>
    </div>
  </div>
        
   <!-- -------------------RODAPÉ------------------- -->

   <footer>
    <ul>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/facebook.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/instagram.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/snapchat.png" alt=""></i></a></li>
        </ul>
        <p><i class="fa-solid fa-copyright"></i> Todos os direitos reservados - WebSchool 2023</p>
    
    </footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>