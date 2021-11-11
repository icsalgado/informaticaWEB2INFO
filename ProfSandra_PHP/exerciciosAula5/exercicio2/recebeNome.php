<?php
     //cadastro.php 
        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);

        $cadastro = file_get_contents('lista.txt');
        $cadastro .= "<li>".$nome."</li>";
        file_put_contents('lista.txt', $cadastro);

        header('Location:index.php');
?>