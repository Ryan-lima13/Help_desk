<?php
    session_start();

    if( ! isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim'){
        header('location:index.php?login=erro2');
    }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Abrir Chamado</title>

    <link rel="stylesheet" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header> <!-- inicio cabeçalho -->

        <nav class="navbar navbar-expand-md navbar-light bg-dark">
            <a href="index.php">
                <img class="navbar-brand" width="50" src="imagem/logo.png" alt="">
                Help Desk
            </a>

        </nav>

    </header> <!-- fim cabeçalho -->

    <section id="abrir_chamado">
        <h2 class="mt-5 text-center">Abertura de Chamado</h2>

        <div class="container">
            <div class="row ">
                <div class="col-md-6 form-group">
                    <input type="text" name="titulo" id="titulo" placeholder=" Título" class="form-control">

                </div>

                <div class="col-md-6 form-group">
                    <select name="categoria" id="categoria" class="form-control">
                        <option value="">Criação de Usuário</option>
                        <option value=""> Impressora</option>
                        <option value=""> Hardware</option>
                        <option value="">software</option>
                        <option value=""> Rede</option>
                    </select>

                </div>

            </div>
            <div class="row">
                <div class="col-md form-group">
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="index.php" class="btn btn-info">Voltar</a>
                    <a href="" class="btn btn-info mr-5"> Abrir</a>


                </div>

                

            </div>
            <a href="consultar_chamado.php">clique aqui</a>

        </div>


    </section>

    
  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>