<?php
    require_once('../action/Usuario.php');
    require_once('../database/conexao.php');

    $database=new Conexao();
    $db=$database->getConnection();
    $usuario=new Usuario($db);

    if(isset($_POST['cadastrar'])){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confSenha=$_POST['confSenha'];
        
        if($usuario->cadastrar($nome,$email,$senha,$confSenha)){
            echo"<script>alert('Cadastro realizado com sucesso')</script>";
        }else{
            echo"<script>alert('Erro ao cadastrar!')</script>";
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
                    <h2>Tela de Cadastro</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="nome" autocomplete="off" required>
                        <label for="">Nome</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" autocomplete="off" required>
                        <label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="senha" required>
                        <label for="">Senha</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="confSenha" required>
                        <label for="">Confirmar Senha</label>
                    </div>
                    <input type="checkbox" id="smallCheckbox" required>
                    <label for="smallCheckbox"><a href="../view/concordo.php" style="color: white;">Li e concordo</a></label>

                    <button class="btn" type="submit" name="cadastrar" onclick="return confirm('Certeza que deseja Cadastrar?')">Cadastrar</button>
                    <div class="create-account">
                        <p>Já possui uma conta? <a href="login.php">Logar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>