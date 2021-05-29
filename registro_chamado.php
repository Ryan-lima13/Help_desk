<?php
    echo '<pre>'; 
    print_r ($_POST);
    echo '</pre>';
    // trabalhando na montagem do texto
    $titulo= str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);
    $texto = $titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;
    // abrindo o arquivo
    $arquivo = fopen('arquivo.hd','a',);
    
    //escrevendo o texto
    fwrite($arquivo,$texto);
    // fecahndo o arquivo
    fclose($arquivo);
   
?>