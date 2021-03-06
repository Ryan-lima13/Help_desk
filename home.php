<?php
    require_once("validador_acesso.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Help Desk</title>

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

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logoff.php" class="nav-link text-white">Sair</a>
                </li>
            </ul>

        </nav>

    </header> <!-- fim cabeçalho -->

    <section id="home">
        <h2 class="text-center mt-5">Menu</h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 ">

                    <a href="consultar_chamado.php"><img class="img-fluid" width="200" src="imagem/formulario_consultar_chamado.png" alt=""></a>

                </div>

                <div class="col-md-4">

                    <a href="abrir_chamado.php"><img class="img-fluid" width="200" src="imagem/formulario_abrir_chamado.png" alt=""></a>

                </div>
            </div>
            
        </div>
        

        

    </section>

    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>