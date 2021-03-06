<?php
    require_once("validador_acesso.php");
?>

<?php
  // chamados
  $chamados = array();
  // abrir o arquivo
  $arquivo =fopen('arquivo.hd','r');
  // pecorrer o arquivo enquanto houver registro 
  while( !feof($arquivo)){ // testa por um fim de um arquivo 
    $registro = fgets($arquivo);
    
    $chamados[] =$registro;

  }
  fclose($arquivo);
 
  

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Consultar Chamado</title>
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

    <section id="consulta">
        <h2 class="mt-5 text-center">Consultar Chamado</h2>

        <div class="container">
        <div class="card-body">
        <?php
          foreach($chamados as $chamado){
           
            
          
        ?>
        <?php
          $chamando_dados = explode('#',$chamado) ;
          if($_SESSION['perfil'] == 2){
            // só vamos exibir se ele foi criado pelo usuario
            if($_SESSION['id'] != $chamando_dados[0]){
              continue;
            }
          }
          if(count($chamando_dados)< 3 ){
            continue;
          }
        ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamando_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamando_dados[1]?></h6>
                  <p class="card-text"><?= $chamando_dados[2]?></p>

                </div>
              </div>
              <?php
                };
              ?>

             

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-info btn-block">Voltar</a>
                </div>
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