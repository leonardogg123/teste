<?php
session_start();

require_once('../action/Usuario.php');
require_once('../database/conexao.php');

$database = new Conexao();
$db = $database->getConnection();
$usuario = new Usuario($db);

if(isset($_POST['logar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($usuario->logar($email, $senha)){
        $_SESSION['email'] = $email;

        header("Location: ../public/index.php #discover");
        exit();

    }else{
        print "<script> alert ('Login invalido')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="../public/img/favicon-32x32.png"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Poupe | Travel</title>
    <link rel="stylesheet" href="../public/css/cadastro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
</head>
<body>

<?php include_once("../view/header.php"); ?>

    <!-- Criando login -->
    <div class="fundo"></div>
<div class="container"><!-- Conteúdo do contêiner aqui --></div>
    <div class="container">
        <div class="item">
        <img src="../public/img/logo_viagens.png" alt="Seu logotipo" class="logo"><h2 class="logo">Poupe Travel</h2>    
            <div class="text-item"><br>
                <h2>Bem-Vindo!</h2><br>
                <p>Seja bem vindo ao Poupe Travel! estamos aqui para ajudar você a organizar a melhor viagem possível! </p>
                <div class="social-icon">
                    <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
                    <a href="https://twitter.com"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a>
                    <a href="https://www.instagram.com"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form method="POST">
                    <h2>Tela de Login</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" autocomplete="off" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="senha" required>
                        <label>Senha</label>
                    </div>
                    
                    <button class="btn" name="logar" onclick="return confirm('Certeza que deseja Logar?')">Logar</button>
                    <div class="create-account">
                        <p>Criar uma nova conta? <a href="cadastro.php">Cadastrar-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>