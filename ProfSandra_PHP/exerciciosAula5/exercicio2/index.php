<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

    <form method="POST" action="recebeNome.php">
        <label>Novo Nome:</label>
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>

    <h1>Lista de Nomes</h1>

    
    <ul>
        <?php
            $lista = file_get_contents('lista.txt');

            $lista = explode("</li>", $lista);
            $linhas = count($lista);
        
            for($i=0; $i < $linhas; $i++){
                
                echo $lista[$i];
            }
            
        ?>
    </ul>

</body>
</html>