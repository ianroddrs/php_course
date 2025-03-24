<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $parametro = 2;

        // comparação por igualdade e não por identidade
        
        switch($parametro){
            case 2:
                echo 'é 2';
                break;
            case 3:
                echo 'é 3';
                break;
            default:
                echo 'não é 2 nem 3';
                break;
        }
        

    ?>
</body>
</html>