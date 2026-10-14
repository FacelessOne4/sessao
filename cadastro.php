<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema - PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                👤
            </div>
           <h1>
            Criar Conta
           </h1>
           <p class="subtitulo">
            Preencha seus dados para se cadastrar.
           </p>
           <form action="cadastar.php" method="POST">
            <div class="campo">
                <label for="nome">
                    Nome completo
                </label>
                <input type="text" id="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="campo">
                <label for="email">
                    Email
                </label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="senha">
                <label for="password">
                    Senha
                </label>
                <input type="text" id="text" name="nome" placeholder="Digite seu nome" required>
            </div>
           </form>
        </div>
    </div>
</body>
</html>