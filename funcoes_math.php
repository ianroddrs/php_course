<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php
            
            $num = 9;

            // ceil -> Arredonda para cima
            echo ceil($num) . '<br>';
            
            // floor -> Arredonda para baixo
            echo floor($num) . '<br>';

            // round -> Arredonda com base nas casas decimais
            echo round($num) . '<br>';

            // rand -> Gera um inteiro aleatorico ente zero e randmax
            echo rand(10,20) . '<br>';
            echo getrandmax() . '<br>';

            // sqrt -> Retorna a raiz quadrada
            echo sqrt($num) . '<br>';

        ?>
    </body>
</html>