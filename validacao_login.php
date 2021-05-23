<?php
    // variavel de autenticação 
    $usuario_autenticado = false;
    // usuário do sistemas

    $usuarios = array(
        array('email' =>'admteste@.com.br','senha' =>'123456'),
        array('email' =>'user@teste.com.br','senha' =>'abc')

    );
    /*echo '<pre>';
    print_r($usuarios);
    echo '</pre>';*/


   /* print_r($_GET);
    echo '<br/>';
    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
    */

    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
        if($usuario_autenticado){
            echo 'login e senha autenticados';
        }else{
            echo 'erro nao autenticado';
        }
    }
    print_r($_POST);
    echo '<br/>';
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
?>