<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            $parametro = 2;

            // boolean true == int 1 

            switch($parametro){
                case '1':
                    echo 'entrou no 1';
                    break;
                case '2':
                    echo 'entrou no 2';
                    break;
                case '3':
                    echo 'entrou no 3';
                    break;
                default:
                    echo 'entrou no default';
                    break;
            }

        ?>
    </body>
</html>