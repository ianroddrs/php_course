<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
    
        <?php 

            // sequenciais (numericos)
            $lista_frutas = array('Banana','Maçã','Morango','Uva'); //$lista_frutas = ['Banana','Maçã','Morango','Uva'];
            $lista_frutas[] = 'Abacaxi';

            // debugar array
            var_dump($lista_frutas);
            echo '<hr>';
            print_r($lista_frutas);
            echo '<br>';
            echo $lista_frutas[4]


            // associativos
        ?>

    </body>
</html>