<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            $num1 = 13;
            $num2 = 4;

            echo "A soma entre $num1 e $num2 é " .  ($num1 + $num2) . "<br>";
            echo "A subtração entre $num1 e $num2 é " .  ($num1 - $num2) . "<br>";
            echo "A multiplicação entre $num1 e $num2 é " .  ($num1 * $num2) . "<br>";
            echo "A divisão entre $num1 e $num2 é " .  ($num1 / $num2) . "<br>";
            echo "O resto da divisão entre $num1 e $num2 é " .  ($num1 % $num2) . "<br>";

            // operador de atribuição
            // =
            // =, -, *, /, %

            $x = 10;
            $x += 5;

            echo $x;
        ?>
    </body>
</html>