<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php 

        // funcao para que retorna o tipo do dado
        // gettype()

        // int -> float ou string
        // float -> int ou string
        // boolean -> int ou string
        // string -> int ou float ou boolean

        $valor = 10; // int ou integer
        $valor2 = (float) $valor; // float ou double
        $valor3 = (string) $valor; // string
        $valor4 = (boolean) $valor; // string

        echo gettype($valor) . ' ' . $valor;
        echo '<br>';
        echo gettype($valor2) . ' ' . $valor2;
        echo '<br>';
        echo gettype($valor3) . ' ' . $valor3;
        echo '<br>';
        echo gettype($valor4) . ' ' . $valor4;



        ?>
    </body>
</html>