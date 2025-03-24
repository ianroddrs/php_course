<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   
        $num = 64.99;

        // ceil($numero) -> arredonda para cima
        echo ceil($num) . '<br>';
        // floor($numero) -> arredonda para baixo
        echo floor($num) . '<br>';
        // round($numero) -> arredonda o valor com base nas casa decimais
        echo round($num) . '<br>';
        // rand() -> gera um inteiro aleatório
        echo rand(0,10) . '<br>';
        echo getrandmax() . '<br>';
        // sqrt($numero) -> retorna a raiz quadrada 
        echo sqrt($num) . '<br>';


    ?>
    
</body>
</html>