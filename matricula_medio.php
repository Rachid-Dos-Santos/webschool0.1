<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Matrícula Ensino Médio</title>
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

  <h1>Matrícula Ensino Médio</h1>
    
<form class="row g-3">
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Nome completo do Aluno</label>
    <input required type="text" class="form-control" id="idnomecomp" nome="nomecomp">
  </div>
  <div class="col-md-6">
    <label for="idaec" class="form-label">Classes</label>
    <select nome="aec" id="idaec" class="form-select">
      <option nome="10ªclasse"selected>10ª Classe</option>
      <option nome="11ªclasse">11ª Classe</option>
      <option nome="12ª classe">12ª Classe</option>
      <option nome="13ªclasse">13ª Classe</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Certificado da classe anterior</label>
    <input type="file" class="form-control" id="idftp" nome="ftp">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Foto tipo passe em conformidade</label>
    <input type="file" class="form-control" id="idftp" nome="ftp">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Foto do BI ou Cédula Pessoal</label>
    <input required type="file" class="form-control" id="idftbi" nome="ftbi">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Foto do atestado medico</label>
    <input type="file" class="form-control" id="idftam" nome="ftam">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Foto do cartão de vacinas</label>
    <input type="file" class="form-control" id="idftcv" nome="frcv">
  </div>
  <div class="col-12">
    <label for="idnm" class="form-label">Método de Pagamento:</label>
    <a href="#"><img width="30px" src="logos\Itau.jpg" alt="itaú"></a>
    <a href="#"><img width="50px" src="logos\PayPay.jpg" alt="paypay"></a>
    <a href="#"><img width="70px" src="logos\MasterCard.png" alt="mastercard"></a>
    <a href="#"><img width="110px" src="logos\PayPal.jpg" alt="paypal"></a>
    <a href="#"><img width="100px" src="logos\caixa-1.png" alt="caixa"></a>
    <a href="#"><img width="60px" src="logos/Visa.png" alt="visa"></a>
    <a href="#"><img width="130px" src="logos\GooglePay.jpg" alt="googlepay"></a>
    <a href="#"><img width="110px" src="logos\MercadoPago.png" alt="mercadopago"></a>
    <a href="#"><img width="100px" src="logos\pix.jpg" alt="pix"></a>
    <a href="#"><img width="100px" src="logos\tbc.jpg" alt="transferenciab"></a>
  </div>
    <div>
       <p><span>Obs:</span> A incoformidade das imagens pode levar ao rejeitamento da Matrícula!</p>
       <p><span>Obs:</span> Se hover algum documento em falta, deve leva-lo dentro de 30 dias à secretaria do Colégio.</p>
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
    <button nome="verificacao" type="submit" class="btn btn-primary">Fazer Verificação</button>
  </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

</body>
</html>