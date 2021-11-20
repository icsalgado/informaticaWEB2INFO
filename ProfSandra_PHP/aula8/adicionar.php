<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Adicionar Usuário</h2>
        <form action="adicionar_action.php" method="POST">
            <label>
                Name: <br>
                <input type="text" name="name">
            </label><br>
            <label>
                Email: <br>
                <input type="text" name="email">
            </label><br>
            <input type="submit" value="Adicionar">
        </form>
    </body>
</html>