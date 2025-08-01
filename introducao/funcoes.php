<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            // void
            function exibirBoasVindas(){
                echo 'Bem-vindo ao curso de PHP! <br>';
            }

            exibirBoasVindas();
            exibirBoasVindas();
            exibirBoasVindas();

            // return
            function calculaAreaTerreno($largura, $comprimento){
                $area = $largura * $comprimento;
                return $area;
            }

            $resultado = calculaAreaTerreno(30, 50);

            echo $resultado


        ?>
    </body>
</html>