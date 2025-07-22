<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>

        <?php 

            // false -> tipo booleano
            // null e empty -> valores especiais


            $funcionario1 = null; // null e empty
            $funcionario2 = ''; // apenas empty
            $funcionario3 = false; // apenas empty


            // valores null 
            if(is_null($funcionario3)){
                echo 'Sim, a variável é null';
            }else{
                echo 'Não, a variável não é null';
            }
            
            echo '<br>';
            
            // valores vazios
            if(empty($funcionario3)){
                echo 'Sim, a variável é empty';
            }else{
                echo 'Não, a variável não é empty';
            }
            

                 
        ?>

    </body>
</html>