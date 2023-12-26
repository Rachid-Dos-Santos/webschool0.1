<script>
  function limitarDigitos(){
    var campo = document.getElementById("idnm");
    var valorAtual = campo.value;

    if(valorAtual.length > 5){
      campo.value = valorAtual.slice(0, 7);
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
    <title>Pagamentos</title>
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

  <h1>Pagamentos</h1>
    
<form class="row g-3">
<div class="col-12">
    <label for="idnm" class="form-label">Número da Matricula ou Inscrição</label>
    <input maxlenght="7" oninput="limitarDigitos()" required type="number" class="form-control" id="idnm" nome="nm">
  </div>
  <div class="col-md-6">
    <label for="idtp" class="form-label">Tipo de Pagamento</label>
    <select nome="aec" id="idtp" class="form-select">
      <option nome="atl"selected>ATL</option>
      <option nome="1ªiniciacao">1ª (Iniciação)</option>
      <option nome="2ªclasse">2ª Classe</option>
      <option nome="3ªclasse">3ª Classe</option>
      <option nome="4ª classe">4ª Classe</option>
      <option nome="5ªclasse">5ª Classe</option>
      <option nome="6ªclasse">6ª Classe</option>
      <option nome="7ªclasse">7ª Classe</option>
      <option nome="8ªclasse">8ª Classe</option>
      <option nome="9ªclasse">9ª Classe</option>
      <option nome="10ªclasse">10ª Classe</option>
      <option nome="11ªclasse">11ª Classe</option>
      <option nome="12ª classe">12ª Classe</option>
      <option nome="13ªclasse">13ª Classe</option>
      <option nome="transporte">Transporte</option>
      <option nome="natacao">Aulas de Natação</option>
      <option nome="capoeira">Aulas de Capoeira</option>
      <option nome="futebool">Aulas de Futebool</option>
      <option nome="musica">Aulas de Música</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="idqm" class="form-label">Quantidade de Meses</label>
    <select nome="aec" id="idqm" class="form-select">
      <option nome="1"selected>1</option>
      <option nome="2">2</option>
      <option nome="3">3</option>
      <option nome="4">4</option>
      <option nome="5">5</option>
      <option nome="6">6</option>
      <option nome="7">7</option>
      <option nome="8">8</option>
      <option nome="9">9</option>
      <option nome="10">10</option>
      <option nome="11">11</option>
    </select>
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
  
  <div style="text-align:center;" class="col-12">
    <button nome="verificacao" type="submit" class="btn btn-primary">Fazer Verificação</button>
  </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

</body>
</html>