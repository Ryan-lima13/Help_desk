<?php

    // usuário do sistemas

    $usuarios = array(
        array('email' =>'admteste@.com.br','senha' =>'123456'),
        array('email' =>'user@teste.com.br','senha' =>'abc')

    );


   /* print_r($_GET);
    echo '<br/>';
    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
    */
    print_r($_POST);
    echo '<br/>';
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
?>