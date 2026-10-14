<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("location:painel.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                🔐
            </div>
            <h1>
                Bem - Vindo!
            </h1>
            <p>Entre com seus dados para acessar o sistema.</p>
            <form action="autenticar.php" method="POST">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                    
                </div>
                <div class="campo">
                    <label for="senha">
                        Senha
                    </label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submite" class="btn-login">
                    Entrar
                </button>
            </form>
            <p class="cadastro-link">
                Ainda possui uma conta?

            <a href="cadastro.php">
                Criar cadastro
            </a>
            </p>
        </div>
    </div>
</body>
</html>