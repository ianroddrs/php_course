<?php

    // unset() -> remover indices do array de sessao
    // session_destroy() -> remover a variavel de sessao

    session_start();
    session_destroy();
    header('Location: index.php')
?>