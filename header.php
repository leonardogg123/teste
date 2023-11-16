<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: fixed; /* Adicione esta propriedade para tornar a barra de navegação fixa */
            width: 100%; /* Garanta que a barra de navegação ocupe toda a largura */
            z-index: 1000; /* Defina um valor alto de z-index para a barra de navegação */
        }

        .logo {
            font-size: 30px;
            font-weight: normal;
            margin-left: 50px;
            color: rgb(255, 255, 255);
        }

        .logo h5 {
            margin: 0; /* Remove margens padrão do <h5> */
            font-family: 'Inria Serif', serif;
        }

        .nav__list {
            display: flex; /* Altera a exibição da nav__list para flex */
            font-size: 18px;
        }

        .nav__item {
            margin-right: 80px; /* Espaçamento entre os itens da nav__list */
        }

        .nav__item a h6 {
            font-family: 'Galada', cursive; 
            color: rgb(255, 255, 255); /* Altere para a cor desejada */
            margin: 0; /* Remova as margens padrão do <h6> */
        }
                @media only screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .logo {
                margin-bottom: 10px;
            }
        }
        
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <h5>Poupe</h5>
            <h5 style="font-family: 'Dancing Script', cursive;">Travel</h5>
        </div>
        <div class="nav__list">
            <div class="nav__item">
                <h6><a href="../public/index.php">Inicio</a></h6>
            </div>
            <div class="nav__item">
                <h6><a href="../public/index.php#about">Sobre</a></h6>
            </div>
            <div class="nav__item">
                <h6><a href="../public/index.php#place">Lugares</a></h6>
            </div>
            <div class="nav__item">
                <h6><a href="../public/index.php#membro">Seja membro</a></h6>
            </div>
            <div class="nav__item">
                <h6><a href="../public/index.php#contato">Contato</a></h6>
            </div>
        </div>
    </div>
</body>
</html>
