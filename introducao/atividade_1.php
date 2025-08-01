<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php 
        
            $idade = 20;
            $peso = 50.0;

            if(($idade >= 16 && $idade <= 69) && $peso >= 50.0){
                echo 'Atende aos requisitos';
            }else{
                echo 'Nao atende aos requisitos';
            }

        ?>

        <?= (($idade >= 16 && $idade <= 69) && $peso >= 50.0) ? 'Atende aos requisitos' : 'Nao atende aos requisitos' ?>
    </body>
</html>