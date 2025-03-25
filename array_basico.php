<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // arrays sequenciais (numericos)
        // $lista_frutas = array('banana', 'maçã', 'morango', 'uva');
        $lista_frutas = ['banana', 'maçã', 'morango', 'uva'];

        $lista_frutas[] = 'abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo $lista_frutas[2];

        echo '<hr>';

        // arrays associativos
        $lista_frutas = array('a'=>'banana', 'b'=>'maçã', 'c'=>'morango', 'd'=>'uva');

        // in_array() -> true ou false
        echo in_array('maçã',$lista_frutas);

        // array_search() -> retorna o indice do calor pesquisado caso ele exista, null se não existe

        echo array_search('uva', $lista_frutas);

    ?>
</body>
</html>