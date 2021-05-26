<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //fopen('arquivo.rd','a');
    $texto = $_POST['titulo'] .$_POST['categoria'] .$_POST['descricao'];
    echo " $texto <br/> ";
?>