<?php
    // Receber o IP enviado via POST
    $ip = $_POST['ip'];
    
    // Salvar o IP em um arquivo
    file_put_contents('ips.txt', $ip . PHP_EOL, FILE_APPEND);
    
    // Responder com uma mensagem de sucesso
    echo "IP recebido e armazenado com sucesso!";
?>
