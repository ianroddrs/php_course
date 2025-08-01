<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            $numeros_sorteados = [];

            while(count($numeros_sorteados) < 6){
                $numero = rand(1, 60);

                if(!in_array($numero, $numeros_sorteados)){
                    $numeros_sorteados[] = $numero;
                }
            }

            print_r($numeros_sorteados)

        ?>
    </body>
</html>