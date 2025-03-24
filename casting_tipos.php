<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $valor = 10;
        // float double
        $valor2 = (float) $valor;
        $valor3 = (string) $valor2;

        
        echo $valor . gettype($valor) . '<br>';
        echo $valor2 . gettype($valor2) . '<br>';
        echo $valor3 . gettype($valor3) . '<br>';
        
        $valor3 = 10.23;
        // int integer
        $valor4 = (int) $valor3;
        // boolean bool
        // qualquer valor -> true (1) senao false (vazio)
        $valor5 = (boolean) $valor4;

        echo $valor4 . gettype($valor4) . '<br>';
        echo $valor5 . gettype($valor5) . '<br>';
        ?>
</body>
</html>