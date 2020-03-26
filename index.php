<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <h1>Cadastro de Clientes</h1>
    <!--Botão de disponibilidade de lojas-->
    <input type="button" class="btn btn-dark" id="estadoBotao" value="Lojas Disponiveis">
    <div id="estados"></div>
    <hr>

    <!--Formulário de cadastro de clientes-->
    <form name="formulario" action="inserir.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome">
        <label for="anoNasc">Ano de Nascimento</label>
          <input type="number" class="form-control" name="anoNasc" id="anoNasc">
        <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id="email">
        <label for="telefone">Telefone</label>
          <input type="number" class="form-control" name="telefone" id="telefone">
        <label for="uf">UF de Estado</label>
          <input type="text" class="form-control" name="uf" id="uf">
      </div>
      <input type="button" class="btn btn-outline-dark" id="botao" value="Verificar">
      <input type="submit" class="btn btn-primary" id="botao" value="Enviar">
    </form>
    <!--Exibe a verificação a partir do script-->
    <div id="resultado"></div>

    <!--Verificação de data e hora-->
    <div id="php">
      <?php
        $hora = date('H');
        if ($hora < 10){
          echo '<h1>Olá, bom dia, hoje é dia ' .date('d/m/y'). '!</h1>';
        } elseif ($hora < 19){
          echo '<h1>Olá, boa tarde, hoje é dia ' .date('d/m/y'). '!</h1>';
        }else{
          echo '<h1>Olá, boa noite, hoje é dia ' .date('d/m/y'). '!</h1>';
        }
        $temp = 3;

        switch($temp){
          case 1:
            echo "Está chovendo";
          break;
          case 2:
            echo "Está sol";
          break;
          default:
            echo "Tempo ensolarado";
        }
      ?>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>