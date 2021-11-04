<?php

$name = filter_input(INPUT_GET, 'nome');//filter_input é uma função do php que captura o campo do formulário e verifica se ele está preenchido
$age = filter_input(INPUT_GET, 'idade');//input_post quando o metodo de envio for POST

if ($name && $age){
    echo "O nome foi ".$name;
    echo "<br>A idade foi ".$age;
}else{
    echo "um dos campos ou ambos não foram informados";
}
