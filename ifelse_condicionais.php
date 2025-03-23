<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //  operadores condicionais
        // ==
        // ===
        // != ou <>
        // !===
        // <
        // >
        // >=
        // <=

        // operadores lógicos
        // && ou AND
        // || ou OR
        // XOR
        // !


        if(2 == '2' && 32 > 2 OR 23 <= 99 XOR !(22 != 32)){
            echo 'verdadeiro';
        }else{
            echo 'falso';
        }

        // operador ternario : <condicao> ? true : false

        echo 22 > 11 ? 'SIM' : 'NÃO';


    ?>

</body>
</html>