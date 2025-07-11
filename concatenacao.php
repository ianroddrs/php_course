<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
    
        <?php 

            $nome = 'Ian';
            $cor = 'amarelo';
            $idade = 24;
            $atividade = 'andar de bicicleta';

            // operador ponto
            echo 'Olá '. $nome .', sua cor favorita é ' . $cor .', você possui ' . $idade .' anos e gosta de ' . $atividade . '.<br>';

            // aspas duplas
            echo "Olá $nome"
        ?>
    </body>
</html>