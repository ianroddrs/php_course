<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode doar sangue?</title>
</head>
<body>

    <?php 
        $idade = 29;
        $peso = 86.0;

        if(($idade >= 16 && $idade <= 69) && $peso >= 50){
            echo 'atende aos requisitos';
        }else{
            echo 'não atende aos requisitos';
        }
    ?>

</body>
</html>