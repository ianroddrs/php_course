<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            function calculaImposto($salario){
                if($salario >= 1903.99 && $salario <= 2826.65){
                    $juros = 7.5;
                }else if($salario >= 2826.66 && $salario <= 3751.05){
                    $juros = 15;
                }else if($salario >= 3751.06 && $salario <= 4664.68){
                    $juros = 22.5;
                }else if($salario >= 4664.68){
                    $juros = 27.5;
                }else{
                    $juros = 0;
                }

                $valor_imposto = $salario * ($juros / 100);

                return $valor_imposto;
            }

            echo calculaImposto(1000)

        ?>
    </body>
</html>