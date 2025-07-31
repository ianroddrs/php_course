<?php

    $_POST['titulo'] = str_replace('#', '-', $_POST['titulo']);
    $_POST['categoria'] = str_replace('#', '-', $_POST['categoria']);
    $_POST['descricao'] = str_replace('#', '-', $_POST['descricao']);

    $texto =  implode('#', $_POST) . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php')

?>