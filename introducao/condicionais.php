<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>

        <?php

            // operadores condicionais

            // == 
            // ===
            // != ou <>
            // !==
            // <
            // <=
            // >
            // >=

            // operadores lógicos

            // && ou AND
            // || ou OR
            // XOR
            // ! 
            
            // if(5 != '5' XOR 6 != 6 AND false){
            //     echo 'Verdadeiro';
            // }else{
            //     echo 'Falso';
            // }

            $usuario_possui_cartao_loja = true;
            $valor_compra = 225;
            $valor_frete = 50;
            $recebeu_desconto_frete = true;

            if($usuario_possui_cartao_loja && $valor_compra >= 400){
                $valor_frete = 0;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
                $valor_frete = 10;
            }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
                $valor_frete = 25;
            }else{
                $recebeu_desconto_frete = false;
            }

            // operador ternario <condicao> ? true : false

        ?>

        <h1>Detalhes do pedido</h1>
        <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NAO' ?></p>
        <p>Valor da Compra: <?= $valor_compra ?></p>
        <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NAO' ?></p>
        <p>Valor da Frete: <?= $valor_frete ?></p>

        
    </body>
</html>