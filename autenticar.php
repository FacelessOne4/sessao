<?php
session_start();
if(!isset($_SESSION["cadastro"])){

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Necessário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="mensagem-container">
        <div class="mensagem-card">
            <div class="icone-erro">
                ⚠️
            </div>
            <h1>
                Nenhum cadastro
            </h1>
            <p>
                Você precisa criar uma conta antes de fazer login
            </p>
            <a href="cadastro.php" class="btn-voltar">
                criar cadastro
            </a>
        </div>
    </div>    
</body>
</html>
<?php
exit;
$email = $_POST["email"];
$senha = $_POST["email"];
$cadastro = $_SESSION["cadastro"];
if($email == $cadastro["email"]&& $senha == $cadastro["senha"]){
    $_SESSION["usuario"] = $cadastro[nome];
    $_SESSION["email"] = $cadastro[email];
    $_SESSION["tipo"] = $cadastro[aluno];
    header("Location: ")
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>