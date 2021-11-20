<?php
    require './config.php';//conexão com o bando em outro arquivo

    $sql = $pdo->query('SELECT * FROM usuarios');//seleção de todos os campos da tabela usuaios
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);//pega todos os dados sem o parametro "PDO::FETCH_ASSOC" (que é uma constante estatica do pdo) os dados serão duplicados
    
    echo "Total: ".$sql->rowCount();//para contar as linhas do BD
    echo '<pre>';//para mostrar cada registro em uma linha
    print_r($dados);//mostra um array com os dados do banco
    
?>