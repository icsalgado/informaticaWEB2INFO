<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS -->
        <link rel="stylesheet" href="../style.css">
        
        <title>Login 2021 F1</title>
    </head>

    <body class="login-bg">
        <header>
            <!-- Cabeçalho da página -->
            <header class="login-page">
                <div class="menu-login">
                    <div>
                        <h1>Formula 1 - portal de login</h1>
                    </div>
                    <div>
                        <a href="../index.php">Voltar</a>
                    </div>
                </div>
            </header>
        </header>

        <!-- Formulário de login, redireciona para redefinição de senha ou login como ROOT ou USER -->
        <div class="flex-container login-data"> 
            <form method="POST">
                <br><h2> Informe seus dados </h2><br>
                <input type="email" name="email" placeholder="E-mail"></br></br>
                <input type="password" name="senha" placeholder="Senha"></br></br>
                <button type="submit" class="btn">Entrar</button>
                <a href="#">Redefinir senha</a>
            </form>
        </div>
    </body>
</html>