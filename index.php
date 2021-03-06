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
  <body class="bg-dark">

    <header> <!-- inicio cabeçalho -->

        <nav class="navbar navbar-expand-md navbar-light bg-dark">
            <a href="index.php">
                <img class="navbar-brand" width="50" src="imagem/logo.png" alt="">
                Help Desk
            </a>

        </nav>

    </header> <!-- fim cabeçalho -->


    <section id="formulario"><!--inicio formulario login-->
    
    <h1 class="display-4 primeiro text-center text-info"> Login</h1>
        
        <div class="container ">
        
            

            <Form action="validacao_login.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-10  form-group ">
                        <input type="email" name="email" id="email" class="form-control bg-md" placeholder="E-mail" required>
                
                    </div>
                
                
                    </div>
                    <div class="row justify-content-center form-group">
                        <div class="col-md-10">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder=" Senha" required>
                        </div>
                        <?php 
                            if(isset($_GET['login']) && $_GET['login'] == 'erro'){

                            
                        ?>
                        <div class="text-danger">
                            Usuário ou senha inválido!
                        </div>

                        <?php

                            }

                        ?>

                        <?php 
                            if(isset($_GET['login']) && $_GET['login'] == 'erro2'){

                            
                        ?>
                        <div class="text-danger">
                            Faça o login para poder ter acesso..
                        </div>

                        <?php

                            }

                        ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <button class="btn btn-info btn-block" type="submit">entrar</button>
                        
                        </div>
                    
                    </div>
            </Form>

                </div>
                

            </div>

    

        

    </section><!--fim formulario login -->

    


    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>