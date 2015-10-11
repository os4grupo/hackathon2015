<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sugestao = $_POST["sugestao"];
    $mensagem = "Sugestao enviada por um visitante:\n\n";
    $mensagem .= "Nome: $nome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Sugestao: $sugestao";
    mail("os4grupo@gmail.com", "Sugestao", $mensagem);
    echo "Obrigado por enviar sua sugestao!";
?>