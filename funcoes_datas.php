<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   

    // date(formato) -> recupera a data atual
    echo date('d/m/Y H:i:s D') . '<br>';
    
    // date_default_timezone_get(timezone) -> atualizar o timezone default da aplicação
    echo date_default_timezone_get() . '<br>';
    
    // date_default_timezone_set(timezone) -> atualizar o timezone default da aplicação
    date_default_timezone_set('America/Sao_Paulo');
    
    echo date('d/m/Y H:i:s D') . '<br>';
    
    // strtotime(data) -> transforma datas textuais em segundos.

    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    // timestamp
    // 01/01/1970 

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $delta_time = $time_final - $time_inicial;

    $segundos_no_dia = 24*60*60;

    $delta_dias = $delta_time / $segundos_no_dia;

    echo $delta_dias;

    ?>
    
</body>
</html>