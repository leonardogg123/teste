<?php
session_start();

require_once('../action/Crud.php');
require_once('../database/conect.php');

$database = new Database ();
$db = $database->getConnection();
$crud =new Crud ($db);
if(isset($_POST['qnt'])){
    $_SESSION['qnt'] = $_POST['qnt'];
    header("Location: tabela.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/perfil.css">
    <!--Box-icon-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--Google-Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Perfil</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><img src="../public/img/logo.png" alt="" height="150" width="150">Poupe | Travel</a>

        <ul class="Links">
            <li><a href="../public/index.php#home" class="active">Home</a></li>
            <li><a href="../public/index.php#about">Sobre</a></li>
            <li><a href="../public/index.php#contato">Contato</a></li>
        </ul>

        <div class="h-main">
            <a href="tabela.php" class="h-btn">Editar</a><a href="tabela.php" class="h-btn">Excluir</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
        </div>
    </header> 

    <section class="hero">
        <div class="hero-text">
            <h1>Perfil</h1>
            <h4>Seja bem-vindo</h4>
            <p>Aqui estão alguns itinerários seus
               </p>
               <form action="" method="POST">
                <div class="hero-in">
                    <div class="box">
                        <h5>Itinerário</h5>
                        <button type="submit" name="qnt" value="1"><a href="tabela.php"><img src="../public/img/1.svg"></a></button>
                    </div>

                    <div class="box">
                        <h3></h3>
                        <h5>Itinerário</h5>
                        <button type="submit" name="qnt" value="2"><a href="tabela.php"><img src="../public/img/2.svg"></a></button>
                    </div>

                    <div class="box">
                        <h3></h3>
                        <h5>Itinerário</h5>
                        <button type="submit" name="qnt" value="3"><a href="tabela.php"><img src="../public/img/3.svg"><a></button>
                    </div>
                </div>
               </form>
        </div>

        <div class="hero-img">
            <img src="../public/img/hero-bg.jpeg">
        </div>
    </section>
    
</body>
</html>