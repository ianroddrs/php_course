<?php 

    session_start();

    if (isset($_GET['email']) && isset($_GET['senha'])){
        print_r($_GET);
    
        echo '<br>';
        
        echo $_GET['email'] . '<br>';
        echo $_GET['senha'] . '<br>';
        
        echo '<hr>';
    };

    if (isset($_POST['email']) && isset($_POST['senha'])){
        print_r($_POST);
        
        echo '<br>';
        
        echo $_POST['email'] . '<br>';
        echo $_POST['senha'] . '<br>';
        
        echo '<hr>';
    }

    

    $usuario_autenticado = false;

    $usuarios_app = [
        ['email' => 'ian@teste.com', 'senha' => '123123'],
        ['email' => 'outro@teste.com', 'senha' => 'abcabc']
    ];

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
        
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = true;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
    }

    
    ?>