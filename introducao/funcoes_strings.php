<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php
            
            $texto = 'Curso Completo de PHP <br>';

            // strtolower -> tudo minusculo
            echo strtolower($texto);
            
            // strtoupper -> tudo maiusculo
            echo strtoupper($texto);

            // ucfirst -> primeiro caractere maiusculo
            echo ucfirst($texto);

            // strlen -> conta quantos caracteres exitem
            echo strlen($texto) . '<br>';

            // str_replace -> substitui uma cadeira de caracteres por outro
            echo str_replace('PHP', 'Javascript', $texto);

            // substr -> retorna um trecho da string
            echo substr($texto, 4, 6)

        ?>
    </body>
</html>