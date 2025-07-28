<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php

            $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

            foreach($itens as $item){
                echo "$item";

                if($item == 'mesa'){
                    echo ' (compre uma mesa  e ganhe 25% de descontos em cadeiras)';
                }

                echo '<br>';
            }

            echo '<hr>';

            $funcionarios = [
                ['nome' => 'joão', 'salario' => 2500],
                ['nome' => 'maria', 'salario' => 3000],
                ['nome' => 'julia', 'salario' => 2200]
            ];

            foreach($funcionarios as $idx => $funcionario){
                echo "id $idx: ";
                foreach($funcionario as $idx2 => $valor){
                    echo "$idx2: $valor, ";
                }
                echo '<hr>';
            }

        ?>
    </body>
</html>