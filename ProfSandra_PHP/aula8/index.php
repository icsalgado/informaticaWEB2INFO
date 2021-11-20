<?php
    $pdo = new PDO("mysql:dbname=dbteste;host=localhost","root","");//para conexão com banco de dados
    $sql = $pdo->query('SELECT * FROM usuarios');//seleção de todos os campos da tabela usuaios
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);//pega todos os dados sem o parametro "PDO::FETCH_ASSOC" (que é uma constante estatica do pdo) os dados serão duplicados
    
    echo "Total: ".$sql->rowCount();
    echo '<pre>';//para mostrar cada registro em uma linha
    print_r($dados);//mostra um array com os dados do banco
    
?>