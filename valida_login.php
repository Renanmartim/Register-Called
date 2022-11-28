<?php

    session_start();

    $autentica_usuario = false;

    $usuarios_app = array(
        array('email' => 'admteste@hotmail.com', 'senha' => '123456'),
        array('email' => 'adm@hotmail.com', 'senha' => 'abc'),
    );

    foreach($usuarios_app as $super) {

        if($super['email'] == $_POST['email'] && $super['senha'] == $_POST['senha']) {
            $autentica_usuario = true;
        }

    }

    if ($autentica_usuario) {
        echo 'oi';
        $_SESSION['autenticado'] = 'SIM';
        header('Location:home.php'); 

    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location:index.php?login=erro');
    }

?>