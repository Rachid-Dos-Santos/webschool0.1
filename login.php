<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>

  <style>
    body{
      padding-right:100px;
      padding-left:100px;
      padding-top:100px;
      background-color:whitesmoke;
    }

    h1{
      text-align: center;
      margin-bottom:20px;
    }

    span{
      color:darkred;
    }

    a{
      text-decoration:none;
    }
  </style>

  <h1>Seja Bem vindo de volta!</h1>
    
<form class="row g-3">
  <div style="margin-bottom:40px;" class="col-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input placeholder="Digite aqui o seu email de utilizador..." required type="email" class="form-control" id="idnomecomp" nome="email">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Senha</label>
    <input placeholder="Digite aqui a sua senha..." required type="password" class="form-control" id="idsenha" nome="senha">
  </div>


<div class="col-12">
    <div class="form-check">
      <label class="form-check-label" for="gridCheck">
        <a href="cadastro.php">Fazer Cadastro /</a>
        <a href="#">Esqueceu a sua senha</a>
      </label>
    </div>
    </div>
  </div>


  <div style="text-align:center;" class="col-12">
    <button style="width:200px;" nome="verificacao" type="submit" class="btn btn-primary">Entrar</button>
  </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

</body>
</html>