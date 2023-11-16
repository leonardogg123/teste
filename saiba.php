<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Poupe | Travel</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
	<link rel="stylesheet" href="../public/css/saiba.css">

</head>
<body>

	

<div class="app">
	<body>
	  <!-- Container principal -->
	  <div class="app">
	
		<!-- Carrossel de cartões e botões de navegação -->
		<div class="cardList">
	
		  <!-- Botão para navegar para o cartão anterior -->
		  <button class="cardList__btn btn btn--left">
			<div class="icon">
			  <svg>
				<!-- Ícone de seta para a esquerda -->
				<use xlink:href="#arrow-left"></use>
			  </svg>
			</div>
		  </button>
	
		  <!-- Contêiner para os cartões de viagem -->
		  <div class="cards__wrapper">
	
			<!-- Cartão de viagem atual -->
			<div class="card current--card">
			  <div class="card__image">
				<!-- Imagem do destino atual -->
				<img src="../public/img/img1.jpg" alt="" />
			  </div>
			</div>
	
			<!-- Próximo cartão de viagem -->
			<div class="card next--card">
			  <div class="card__image">
				<!-- Imagem do próximo destino -->
				<img src="../public/img/img2.jpg" alt="" />
			  </div>
			</div>
	
			<!-- Cartão de viagem anterior -->
			<div class="card previous--card">
			  <div class="card__image">
				<!-- Imagem do destino anterior -->
				<img src="../public/img/img3.jpg" alt="" />
			  </div>
			</div>        
		  </div>
	
		  <!-- Botão para navegar para o próximo cartão -->
		  <button class="cardList__btn btn btn--right">
			<div class="icon">
			  <svg>
				<!-- Ícone de seta para a direita -->
				<use xlink:href="#arrow-right"></use>
			  </svg>
			</div>
		  </button>
		</div>
	
		<!-- Fim do carrossel -->

	<div class="infoList">
		<div class="info__wrapper">
			<div class="info current--info">
				<h1 class="text name">Rajasthan</h1>
				<h4 class="text location">India</h4>
				<p class="text description">Jodhpur mehrangarh fort</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">Machu Pichu</h1>
				<h4 class="text location">Peru</h4>
				<p class="text description">Adventure is never far away</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name">Chamonix</h1>
				<h4 class="text location">France</h4>
				<p class="text description">Let your dreams come true</p>
			</div>
		</div>
	</div>

<!--Imagens As classes current--image.. indicam a imagem atual, a próxima e a anterior, respectivamente.-->

	<div class="app__bg">
		<!-- Imagem de fundo para o destino atual -->
		<div class="app__bg__image current--image">
		  <img src="../public/img/img1.jpg" alt="" />
		</div>
		<!-- Imagem de fundo para o próximo destino -->
		<div class="app__bg__image next--image">
		  <img src="../public/img/img2.jpg" alt="" />
		</div>
		<!-- Imagem de fundo para o destino anterior -->
		<div class="app__bg__image previous--image">
		  <img src="../public/img/img3.jpg" alt="" />
		</div>
	  </div>
</div>

<!--Botoes para o lado-->

<svg class="icons" style="display: none;">
	
	<symbol id="arrow-left" viewBox='0 0 512 512'>
		<polyline points='328 112 184 256 328 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
	<symbol id="arrow-right"  viewBox='0 0 512 512'>
		<polyline points='184 112 328 256 184 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
</svg>
  <script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script><script  src="../public/js/saiba.js"></script>

</body>
</html>
