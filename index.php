<!DOCTYPE html>
<html lang="pt-br">
<head>
		<?php 

			include_once ('classes/PHPMailer/src/PHPMailer.php') ;
			include_once ('classes/PHPMailer/src/SMTP.php') ;
			include_once ('classes/PHPMailer/src/Exception.php') ;
			
		?>
	<title>Projeto 1</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<meta name="keywords" content="projeto,tiago,css,html,js,jquery,javascript,curso" />
	<meta name="description" content="Projeto pessoal para estudo de linguagens de programação" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<meta charset="UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>


	<header class="portfolio__header">
		<div class="portfolio__header_logo"><h1>LOGO <?php new Email(); ?></h1></div>
		<nav class="portfolio__header__navigation">
			<ul class="portfolio__header__navigation__list">
				<li class="portfolio__header__navigation__list__item">HOME</li>
				<li class="portfolio__header__navigation__list__item">SOBRE</li>
				<li class="portfolio__header__navigation__list__item">SERVIÇOS</li>
				<li class="portfolio__header__navigation__list__item">CONTATO</li>

			</ul>
		</nav>
		<div class="portfolio__header__menu-toggle">
			<div class="menu__toggle">
				<div class="menu__toggle__item item__order__1"></div>
				<div class="menu__toggle__item item__order__2"></div>
				<div class="menu__toggle__item item__order__3"></div>
			</div>
		</div>
	</header>
	<section class="portfolio__index">
		<div class="portfolio__index__single__slider current-slider" style="background-image: url('img/index.jpg')" ></div>
		<div class="portfolio__index__single__slider current-slider" style="background-image: url('img/index2.jpg')" ></div>
		<div class="portfolio__index__single__slider current-slider" style="background-image: url('img/index3.jpg')" ></div>
		<div class="portfolio__index__shadow">
			<div class="container">
				<div class="portfolio__index__shadow__form">
					<form>
						<h3 class="portfolio__index__shadow__form__hat" >Qual o seu melhor Email?</h3>
						<input type="email" class="portfolio__index__shadow__form__email_value" placeholder="example@gmail.com" required/>
						<input type="submit" class="portfolio__index__shadow__form__submit" value="Cadastrar"/>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="portfolio__about">
		<div class="w-50">
			<div class="container">
				<div class="portfolio__about__hat">
					<h2>Mussum Ipsum</h2>
				</div>
				<div class="portfolio__about__text">
					<p>Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
					<p>Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
				</div>
			</div>
		</div>
		<div class="w-50">
			<div class="portfolio__about__photo">
				<img src="img/you.jpg" class="img_responsive"/>
			</div>
		</div>
	</section>
	<section class="portfolio__specialties">
		<div class="container">
			<div class="w30">
				<div class="portfolio__specialties__list">
					<div class="portfolio__specialties__list__item">
						<div class="portfolio__specialties__list__item__hat">
							<h4>HTML5</h4>
						</div>
						<i class="fab fa-css3-alt"></i>
					</div>
				</div>
			</div>		
			<div class="w30">
				<div class="portfolio__specialties__list">
					<div class="portfolio__specialties__list__item">
						<div class="portfolio__specialties__list__item__hat">
							<h4>CSS</h4>
						</div>
						<i class="fab fa-html5"></i>
					</div>
				</div>
			</div>		
			<div class="w30">
				<div class="portfolio__specialties__list">
					<div class="portfolio__specialties__list__item">
						<div class="portfolio__specialties__list__item__hat">
							<h4>javaScript</h4>
						</div>
						<i class="fab fa-js"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="w-50">
				<div class="portfolio__services__container">
					<div class="portfolio__services__container__hat">
						<h3>Depoimentos dos nossos clientes</h3>
					</div>
					<div class="portfolio__services__container__title">
						<p>Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
					</div>
				</div>
				<div class="portfolio__services__container">
					<div class="portfolio__services__container__hat">
						<h3>Depoimentos dos nossos clientes</h3>
					</div>
					<div class="portfolio__services__container__title">
						<p>Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.</p>
					</div>
				</div>
			</div>
			<div class="w-50">
				<div class="portfolio__services__container">
					<div div class="portfolio__services__container__hat">
						<h3>Serviços</h3>
					</div>
					<ul class="portfolio__services__list">
						<li class="portfolio__services__list__item">Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris</li>				
						<li class="portfolio__services__list__item">Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris</li>				
						<li class="portfolio__services__list__item">Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris</li>				
						<li class="portfolio__services__list__item">Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris</li>				
						<li class="portfolio__services__list__item">Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<footer class="portfolio__footer">
		<p class="portfolio__footer__text">Tiago Oliveira - Todos os direitos reservados.</p>
	</footer>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>

</html>