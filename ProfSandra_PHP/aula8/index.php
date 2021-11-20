<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require './config.php';//conexão com o bando em outro arquivo

            $lista = [];
            $sql = $pdo->query('SELECT * FROM usuarios');
            if($sql->rowCount() > 0){//verifica se tem usuario cadastrado
                $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

            /* Agora começar a componentização com CRUD
            $sql = $pdo->query('SELECT * FROM usuarios');//seleção de todos os campos da tabela usuaios
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);//pega todos os dados sem o parametro "PDO::FETCH_ASSOC" (que é uma constante estatica do pdo) os dados serão duplicados
            
            echo "Total: ".$sql->rowCount();//para contar as linhas do BD
            echo '<pre>';//para mostrar cada registro em uma linha
            print_r($dados);//mostra um array com os dados do banco  */ 
        ?>
        <a href="adicionar.php">Adicionar Usuário</a>
        <br>
        <table border="1px" width="100%">
            <!-- Cabeçalho -->
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <!-- corpo da tabela -->
            <?php foreach ($lista as $dados): ?>
                <tr>
                    <!-- <td> <?php echo $dados['id']; ?> </td> Linha melhorada abaixo-->
                    <td> <?=$dados['id']; ?> </td>
                    <td> <?=$dados['nome']; ?> </td>
                    <td> <?=$dados['email']; ?> </td>
                    <td>  </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>






