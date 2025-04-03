<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento</title>
</head>
<?php include 'include/header.php';?>

<body style="background-color: rgb(201, 201, 201);">
    <div class="container pd-5 bg-white text-dark justify-content-center">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        <main>
        <h1 class="h1" style="font-size: 40px;">Cadastro</h1>
            <form>
            <div class="row">
          <div class="col"> 
            <label for="nome">Nome</label>
            <input type="nome" class="form-control" id="nome" placeholder="Insira seu nome" name="nome">
          </div>
            <div class="row">
            <div class="col"> 
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com.br" name="email">
          </div>
            </div>
          <h2 class="h4 mb-3 mt-3">Escolha a Sala:</h2>
          <div class="row">
          <div class="col">
            <input type="radio" class="form-check-input" id="radio1" name="CPF" value="CPF"> CPF
            <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="col">
          <input type="radio" class="form-check-input" id="radio1" name="CNPJ" value="CNPJ"> CNPJ
          <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="row">
            <div class="col mt-3 pd-3">
            <label for="CPF/CNPJ">Insira o CPF/CNPJ:</label>
            <input type="CPF/CNPJ" class="form-control" id="CPF/CNPJ" placeholder="Insira o seu CPF/CNPJ" name="CPF/CNPJ">
            </div>
          </div>
          <div class="mb-3 mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link mt-3 pd-3" href="main.php" style ="background-color: purple; border-radius: 16px; color: white; margin-left: 10px;">Concluir Cadastro</a>
                </li>
            </ul>
          </div>
          </form>
        </div>
        </main>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
    </div>
</body>
<?php include 'include/footer.php';?>

</html>