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
        <main>
        <h1 class="h1" style="font-size: 40px;">Agendamento</h1>
            <form>
            <div class="row">
          <div class="col"> 
            <label for="dataNas">Data de agendamento:</label>
            <input type="date" class="form-control" id="dataAgendamento" placeholder="Insira a data de agendamento" name="dataAGend">
          </div>
          <h2 class="h4 mb-3 mt-3">Escolha a Sala:</h2>
          <div class="row">
          <div class="col">
            <input type="radio" class="form-check-input" id="radio1" name="sala" value="Arena"> Arena
            <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="col">
          <input type="radio" class="form-check-input" id="radio1" name="sala" value="Sala de Reuniões"> Sala de Reuniões
          <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="row">
          <div class="col">
            <input type="radio" class="form-check-input" id="radio1" name="sala" value="Arena"> Sala 1
            <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="col">
          <input type="radio" class="form-check-input" id="radio1" name="sala" value="Sala de Reuniões"> Sala 2
          <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="row">
          <div class="col">
            <input type="radio" class="form-check-input" id="radio1" name="sala" value="Arena"> Sala 3
            <label class="form-check-label" for="Radio1"></label>
          </div>
          <div class="col">
          <input type="radio" class="form-check-input" id="radio1" name="sala" value="Sala de Reuniões"> Sala 4
          <label class="form-check-label" for="Radio1"></label>
          </div>
          </div>
          <div class="row pd-3 mt-3">
            <label for="descricao">Selecione o horario:</label>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark" disabled>12:00</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">12:20</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">12:45</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">13:00</button>
            </div>
          </div>
          <div class="row mt-3 pd-3">
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">13:20</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark"disabled>13:40</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">13:50</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">14:00</button>
            </div>
          </div>
          <div class="row mt-3 pd-3">
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">14:20</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark" disabled>14:30</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">14:50</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">15:00</button>
            </div>
          </div>
          <div class="row mt-3 pd-3">
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">15:30</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">15:45</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark">16:30</button>
            </div>
            <div class="col"> 
                <button type="button" class="btn btn-outline-dark" disabled>17:00</button>
            </div>
          </div>
          <div class="mb-3 mt-3">
            <label for="descricao">Descreva para que o espaço será usado:</label>
            <textarea class="form-control" rows="5" id="descricao" name="descricao" placeholder="Digite aqui..."></textarea>
            <ul class="nav justify-content">
                <li class="nav-item">
                    <a class="nav-link mt-3 pd-3" href="cadastro.php" style ="background-color: purple; border-radius: 16px; color: white;">Enviar</a>
                    <li class="nav-item">
                    <a class="nav-link mt-3 pd-3" href="inicio.php" style ="background-color: purple; border-radius: 16px; color: white; margin-left: 10px;">Voltar</a>
                </li>
            </ul>
          </div>
          </form>
        </div>
        </main>
    </div>
</body>
<?php include 'include/footer.php';?>

</html>