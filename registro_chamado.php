<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

     $arquivo = fopen('arquivo.rd','a');
    $titulo = str_replace('#',',',$_POST['titulo']);
    $categoria = str_replace('#',',',$_POST['categoria']);
    $descricao = str_replace('#',',',$_POST['descricao']);
    $texto = $_POST['titulo'] .'#'.$_POST['categoria'] .'#'.$_POST['descricao'];

    fwrite($arquivo,$texto);
    fclose($arquivo);
    //echo " $texto <br/> ";
?>