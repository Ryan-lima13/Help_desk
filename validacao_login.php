<?php

    session_start();
    

    

    // variavel de autenticação 
    $usuario_autenticado = false;
    $id_usuario = null;
    $usuario_perfil_id = null;
    $perfil = array(1=>'administrativo',2 => 'usuario');
    // usuário do sistemas

    $usuarios = array(
        array('id'=>1,'email' =>'admiteste@.com.br','senha' =>'123456','perfil'=>1),
        array('id'=>2,'email' =>'user@teste.com.br','senha' =>'abc','perfil'=>1),
        array('id'=>3,'email' =>'maria@teste.com.br','senha' =>'abc','perfil'=>2),
        array('id'=>4,'email' =>'joao@teste.com.br','senha' =>'abc','perfil'=>2)

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
            $id_usuario = $user['id'];
            $usuario_perfil_id = $user['perfil'];
        }
        
    }
    if($usuario_autenticado){
        echo 'autenticado';
        $_SESSION['autenticado']= 'sim';
        $_SESSION['id'] = $id_usuario ;
        $_SESSION['perfil'] = $usuario_perfil_id ;
        header('location:home.php');

    }else{

        $_SESSION['autenticado']= 'não';
        header('location:index.php?login=erro');
    }
  