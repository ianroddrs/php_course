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
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1=> 'Administrativo', 2 => 'Usuário');

    $usuarios_app = [
        ['id' => 1, 'email' => 'ian@teste.com', 'senha' => '123123', 'perfil_id'=> 1],
        ['id' => 2,'email' => 'outro@teste.com', 'senha' => 'abcabc', 'perfil_id'=> 2]
    ];

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
        
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
    }

    
    ?>