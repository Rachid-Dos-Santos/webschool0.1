<script>
  function limitarDigitos(){
    var campo = document.getElementById("idtel");
    var valorAtual = campo.value;

    if(valorAtual.length > 7){
      campo.value = valorAtual.slice(0, 9);
    }
  }
</script>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>

  <style>
    body{
      padding:20px;
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

  <h1>Cadastro</h1>
    
<form class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Nome completo</label>
    <input required type="text" class="form-control" id="idnomecomp" nome="nomecomp">
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Email</label>
    <input required type="email" class="form-control" id="idemail" nome="email">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Senha</label>
    <input required type="password" class="form-control" id="idsenha" nome="senha">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Confirmação da senha</label>
    <input required type="password" class="form-control" id="idconfsenha" nome="confsenha">
  </div>
  <div class="col-md-6">
   <label for="idtel">Telefone:</label>
        <select name="indicativo" id="idindicativo">
            <option value="angola">+244</option>
        </select>
        <input oninput="limitarDigitos()" required type="tel" class="form-control" id="idtel" nome="tel">
  </div>

 <div class="col-md-6">
 <label class="form-label" for="idnascimento">Data de Nascimento:</label>
 <input class="form-control" required type="date" name="nascimento" id="idnascimento">
 </div>

<div class="col-md-6">
<label class="form-label" for="idparentesco">Tipo de Encarregado:</label><br>
        <select class="form-select" required placeholder="Parentesco" name="parentesco" id="idparentesco">
            <option value="aluno">Aluno</option>
            <option value="pai">Pai do aluno(a)</option>
            <option value="mae">Mãe do aluno(a)</option>
            <option value="irmao">Irmao(a) do aluno(a)</option>
            <option value="tio">Tio(a) do aluna(a)</option>
            <option value="avo">Avô(ó) do aluno(a)</option>
            <option value="primo">Primo(a) do aluno(a)</option>
            <option value="sobrinho">Sobrinho(a) do aluno(a)</option>
            <option value="padastro">Padastro(a) do aluno(a)</option>
            <option selected value="outro">Outro</option>
        </select>
</div>

<div class="col-md-6">
<label class="form-label" for="sexo">Sexo:</label>
        <select class="form-select" required name="sexo" id="idsexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
</div>

<div class="col-12">
    <div class="form-check">
      <input required nome="atr" class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        <a href="#">Asssinar termo de responsabilidade</a>
      </label>
    </div>
    <div class="form-check">
      <input required nome="api" class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        <a href="#">Aceitar pólitica da instituição</a>
      </label>
    </div>
  </div>


  <div style="text-align:center;" class="col-12">
    <button style="width:200px;" nome="verificacao" type="submit" class="btn btn-primary">Cadastrar</button>
    <a href="login.php"><button style="background-color:green;" nome="login" type="button" class="btn btn-primary">Fazer Login</button></a>
  </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

</body>
</html>