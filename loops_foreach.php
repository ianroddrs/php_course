<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<!-- para printar arrays pode usar print_r var_dump var_export -->

<body>
    <?php
        $items = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($items);
        echo '</pre>';

        foreach($items as $item){
            echo "$item <br>";
        }

        echo "<hr>";

        $funcionarios = array(
            array('nome' => 'João', 'salario'=> 2500, 'data_nascimento' => "06/03/1970"),
            array('nome' => 'Maria', 'salario'=> 3000),
            array('nome' => 'Júlia', 'salario'=> 2200)
        );
    
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
    
        /* foreach($funcionarios as $idx => $nome_funcionario){
            echo "ID {$idx} - Nome: {$nome_funcionario}  <br />";
            
        } */
        foreach($funcionarios as $idx => $nome_funcionario){
            foreach($nome_funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br />";
            }
            echo "<hr />";
        }


    ?>
</body>

</html>