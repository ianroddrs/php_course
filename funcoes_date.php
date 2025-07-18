<html>
    <head>
        <meta charset="utf-8">
        <title> Curso PHP</title>
    </head>
    <body>
        <?php
    
            // date(formato) -> recuperação da data atual
            // date_default_timezone_get(timesoze) -> retorna o timezone default da aplicação
            // date_default_timezone_set(timesoze) -> atualiza o timezone default da aplicação

            echo date('d/m/Y H:i - w');
            echo '<br>';

            echo date_default_timezone_get();
            echo '<br>';

            date_default_timezone_set('America/Sao_Paulo');

            echo date_default_timezone_get();
            echo '<br>';
            
            echo date('d/m/Y H:i - w');
            echo '<hr>';


            $data_inical = '2024-07-16';
            $data_final = '2018-04-23';

            // timestamp
            // 01/01/1970
            // strtotime(data) converte a data em milissegundos desde 01/01/1970

            $time_inicial = strtotime($data_inical);
            $time_final = strtotime($data_final);

            echo $data_inical . ' - ' . $time_inicial;
            echo '<br>';
            echo $data_final . ' - ' . $time_final;
            echo '<br>';

            // abs() -> retorna o modulo do numero
            $diferenca_times = abs($time_final - $time_inicial);

            echo $diferenca_times;
            echo '<br>';

            $segundos_em_um_dia = 24*60*60;
            
            $diferenca_entre_datas = $diferenca_times / $segundos_em_um_dia;

            echo $diferenca_entre_datas;
            echo '<br>';

        ?>
    </body>
</html>