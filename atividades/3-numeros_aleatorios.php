<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade</title>
</head>
<body>

    <?php 
        $numeros_sorteados = array();

        while(count($numeros_sorteados) <= 5){
            $numero = rand(1, 60);

            if(!in_array($numero, $numeros_sorteados)){
                $numeros_sorteados[] = $numero;
            }

        }

        print_r($numeros_sorteados)
    ?>

</body>
</html>