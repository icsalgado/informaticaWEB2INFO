<?php

$name = filter_input(INPUT_GET, 'nome');//filter_input é uma função do php que captura o campo do formulário e verifica se ele está preenchido

if ($name){
    echo "O nome foi ".$name;
}else{
    echo "nome não informado";
}
