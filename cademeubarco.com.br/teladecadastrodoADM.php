<?php include("htdocs/TCC/conexao.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="cmb.jpg">
  <title>cadastrar ADM</title>
  <meta name="description" content="Wireframe design of a checkout form by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe checkout form">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>
<body class="bg-light">
  <div class="py-5 mx-auto">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-7 mx-auto">
          <img class="justify-content-center m-1 mx-5 mr-5 mb-0 mx-auto" src="cmb.jpg" alt="" width="100" height="100">
          <h2><b>Cadê meu Barco</b></h2>
          <p class="lead">Atenção, para você cadastrar a sua embarcação, primeiro deve fazer&nbsp; o cadastro com seus dados.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3"><b>Requisitos</b></h4>
          <form class="needs-validation" action= "cadastra.php" novalidate="" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3"> <label for="firstName">Nome</label>
                <input type="text" class="form-control" name="Nome"id="Nome" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid first name is required. </div>
              </div>
              <div class="col-md-6 mb-3"> <label for="lastName">Segundo nome</label>
                <input type="text" class="form-control" name="Sobrenome" id="Sobrenome" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid last name is required. </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="input-group">
                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="email">CPF<br></label>
              <input type="text" class="form-control" name="CPF" id="CPF" placeholder="cpf">
              <div class="invalid-feedback" style=""> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="mb-3" style=""> <label for="email">E-mail<br></label>
              <input type="text" class="form-control" name="Email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
              <div class="mb-3"> <label for="address"></label>
                <div class="invalid-feedback"> Please enter your shipping address. </div>
              </div>
              <div class="mb-3"> <label for="address2">Senha<br></label>
                <input type="text" class="form-control" name="Senha" id="senha" placeholder="">
              </div>
              <div class="mb-3"> <label for="address2">Repita a senha<br></label>
                <input type="text" class="form-control" id="address2" placeholder="">
              </div>
              <button class="btn btn-lg btn-block btn-success" type="submit" value="enviar" contenteditable="true">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="py-0 text-muted text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 my-4">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Privacy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Support</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/validation.js"></script>
  </div>
  
</body>

</html>