<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // is_array(array) -> verifica se o parametro é um array

        $array = 'String';
        $array = array();
        $retorno = is_array($array);

        if($retorno){
            echo 'sim, é array';
        }else{
            echo 'não, não é array';
        }

        echo '<hr>';


        // array_keys(array) -> retorna todas as chaves de um array]

        $array = [1 => 'a', 7 => 'b', 18 => 'c'];

        echo "<pre>";
        print_r($array) ;
        echo "</pre>";

        $chaves_arrays = array_keys($array);

        echo "<pre>";
        print_r($chaves_arrays) ;
        echo "</pre>";

        echo '<hr>';

        // sort(array) -> ordena um array e reajusta seus indices


        // asort(array) -> ordena um array preservando seus indices


        // count(array) -> conta a quantidade de elementos de um array


        // array_merge(array) -> funde um ou mais arrays


        // explode(array) -> divide uma string baseado em um delimitador


        // implode(array) -> juntas elementos de um array em uma string

    ?>
</body>
</html>