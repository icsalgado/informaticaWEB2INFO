<?php

$name = filter_input(INPUT_GET, 'nome');//filter_input é uma função do php que captura o campo do formulário e verifica se ele está preenchido
$age = filter_input(INPUT_GET, 'idade');//input_post quando o metodo de envio for POST

if ($name && $age){
    echo "O nome foi ".$name;
    echo "<br>A idade foi ".$age;
}else{
    header("Location: ../index.php");//a função header() vai mudar o cabeçalho da requisição, redirecionar para o arquivo escolhido. deve ser usada se nenhuma info fio enviada ainda
    exit;//para encerrar o código
}
