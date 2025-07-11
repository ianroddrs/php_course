<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php 
            
            // string
            $nome = 'ian rodrigues';

            // int
            $idade = 24;

            // float
            $peso = 79.8;

            // boolean
            $fumante = true; //(true = 1) ou (false = vazio)


            $idade = 25
        
        ?>

        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante ?></p>


    </body>
</html>