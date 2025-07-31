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
            echo $lista_frutas[4];
            
            echo '<hr>';
            
            // associativos
            $lista_frutas = array(
                'a' => 'Banana',
                'b' => 'Maçã',
                'c' => 'Morango',
                'd' => 'Uva'
            );

            $lista_frutas['w'] = 'Abacaxi';

            var_dump($lista_frutas);
            echo '<br>';
            echo $lista_frutas['b'];
            
            echo '<hr>';
            
            // array multidimensioanl
            
            $lista_coisas = [];
            
            $lista_coisas['frutas'] = array('Banana','Maçã','Morango','Uva');
            $lista_coisas['pessoas'] = array('João','José','Maria','Ian');

            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João', 'Maria']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '<\pre>';
            
            echo '<hr>';
            
            // pesquisa em arrays
            // in_array(pesquisa, array) -> boolean para a existencia do que está sendo procurado.
            // array_search() -> retorna o inice do valor pesquisado caso ele exista.

            $existe = in_array('Morango', $lista_frutas);

            if($existe){
                echo 'Sim, o valor pesquisado existe no array';
            }else{
                echo 'Não, o valor pesquisado não existe no array';
            }

            echo '<br>';

            $existe = array_search('Morango', $lista_frutas);

            if($existe != null){
                echo 'Sim, o valor pesquisado existe no array';
            }else{
                echo 'Não, o valor pesquisado não existe no array';
            }
            

            // isset - verificar se existe
            // unset - remover um indice do array
        ?>

    </body>
</html>