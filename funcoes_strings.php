<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $texto = 'curso completo de PHP';

        // strtolower($texto) -> converter texto para lowercase
        echo strtolower($texto) . '<br>';
        
        // strtoupper($texto) -> converter texto para uppercase
        echo strtoupper($texto) . '<br>';
        
        // ucfirst($texto) - converter primeira letra do texto para uppercase
        echo ucfirst($texto) . '<br>';
        
        // strlen($texto) - quantidade de caractere de uma string
        echo strlen($texto) . '<br>';
        
        // str_replace(<procurar>, <substituir>, $texto) -> substituir cadeia de caractere
        echo str_replace('completo','',$texto) . '<br>';
        
        // substr($texto, <posicao_inicial>, <qtd_caracteres>) -> retorna parte de uma string
        echo substr($texto, 3, 8) . '<br>';


    ?>
    
</body>
</html>