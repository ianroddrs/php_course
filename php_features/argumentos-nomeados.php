<?php
    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
        echo "Destinatarios: " . $destinatarios . "<br>";
        echo "CC: " . $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
    }

    sendEmail(
        "ianroddrs@email.com",
        "teste@teste.com",
        "Argumentos nomeados",
        "Dominando a feature de argumentos do php"
    );

    echo '<hr>';

    sendEmail(
        destinatarios: "ianroddrs@email.com",
        mensagem:"Dominando a feature de argumentos do php"
    );
?>