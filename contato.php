<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== SWIPER CSS ==========-->
        <link rel="stylesheet" href="../public/css/swiper-bundlee.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../public/css/contato.css">

        <title>Responsive Landing Page Islands</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Travel</a>
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Explore</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Destinations</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Hotels</a></li>
                    </ul>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <!--========== MAIN ==========-->
        <main class='main'>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                
                    <section class="islands swiper-slide">
                        <img src="../public/img/bali.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Ilhas</h2>
                                <h1 class="islands__title">Bora Bora</h1>
                                <p class="islands__description">Também conhecida como La Paragua, é a maior ilha da província de Palawan. Ilhas Bora Bora Pequena ilha do Pacífico Sul a noroeste do Taiti, na Polinésia Francesa, cercada por motus.</p>
                                <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>

                            <div class="islands__data">
                                <div class="form">
                                    <form action="https://api.staticforms.xyz/submit" method="post">
                                        <label>Nome</label>
                                        <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
                                        <label>Mensagem</label>
                                        <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
                                        <button type="submit">Enviar</button>
                                        <input type="hidden" name="redirectTo" value="http://localhost/a123/public/">
                                        <input type="hidden" name="accessKey" value="4bcf2a7f-f3e8-44d4-b65c-5a18523c609b">
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </section>                 
                </div>
            </div>
        </main>

        <!--========== GSAP ==========-->
        <script src="../public/js/gsap.min.js"></script>

        <!--========== SWIPER JS ==========-->
        <script src="../public/js/swiper-bundle.min.js"></script>

        <!--========== MAIN JS ==========-->
        <script src="../public/js/contato.js"></script>
    </body>
</html>