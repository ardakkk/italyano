@extends('layouts.master')
@section('title')
    Italyano Restoran
@endsection
@section('content')
    
	<header id="header">
		<div class="top-header__mobile">
			<div class="main-nav">
				<div class="mobile-logo">
				</div>
				<div class="mobile-title">
					<h6>
						<span>Italiano</span> Restoran</h6>
				</div>
				<button class="hamburger hamburger--vortex" type="button" aria-label="Menu" aria-controls="navigation">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<div class="under-menu-nav">
				<a class="personal-profile" href="javascript:void(0)">Личный кабинет</a>
				<nav>
				</nav>
				<a href="#tab" class="mobile-cart">
					<i class="fas fa-shopping-cart"></i>
					<p class="total-price">0 тг</p>
				</a>
			</div>
		</div>
		<div class="top-header">
			<div class="header-personal__profile">
				<ul>
					<li>
						<!-- <p href="javascript:void(0)" class="btn-pc">Личный кабинет</p> -->
					</li>
					<li class="shopping-cart">
						<a href="#form">
							<i class="fas fa-shopping-cart cart"></i>
						</a>
					</li>
					<li>
						<a href="#tab" class="total-price">0 тг</a>
					</li>
				</ul>
				<div class="personal-profile">
					<i class="move-right fas fa-angle-right"></i>
					<div class="registr-form">
						<form action="javascript:void(0)" name="signin">
							<h1>Вход в личный кабинет</h1>
							<input type="text" placeholder="Логин" id="login">
							<input type="password" placeholder="Пароль" id="password">
							<button type="submit" id="signin">Войти</button>
							<a href="javascript:void(0)">Регистрация</a>
						</form>
					</div>
					<!-- <div class="profile-page">
						<h1>Профиль</h1>
						<ul>
							<li><i class="fas fa-user"></i> Иванов Иван</li>
							<li><i class="fas fa-cart-arrow-down"></i> Заказы
								<ul>
									<li>17.04.2014: Маргарита 36 см,Coca-Cola 1лт,Салат</li>
									<li>17.04.2014: Маргарита 36 см,Coca-Cola 1лт,Салат</li>
								</ul>
							</li>
							<li><i class="fas fa-map-marker"></i> Адресс: Алматы, Сатпаева 14д.кв 9</li>
						</ul>
						<button>Выйти</button>
					</div> -->
				</div>
			</div>
			<div id="wrapper">
				<div class="top-header__inner">
					<div class="top-header__logo">
						<img src="img/logo.png" alt="logo">
						<p>Italiano</p>
						<p class="restoran">Ресторан</p>
					</div>
					<nav class="top-header__nav">
						<ul>
							<li>
								<a href="#">Начало</a>
							</li>
							<li>
								<a href="#choose-pizza">Выбрать пиццу</a>
							</li>
							<li>
								<a href="#snacks">Выбрать закуску</a>
							</li>
							<li>
								<a href="#beverages">Выбрать напитки</a>
							</li>
						</ul>
					</nav>
					<div class="top-header__callback">
						<p>Заказать по телефону</p>
						<a href="tel:+77279233574">+7 (727)
							<span>923-3574</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-body">
			<div class="slider">
				<div class="slider__inner">
					<div class="slider__desc">
						<h1>Неаполитана</h1>
						<p>Великолепная, пикантная, горячая итальянская пицца с аппетитным французским сыром.</p>
						<button>Выбрать</button>
					</div>
					<div class="slider__img">
						<img src="./img/pizza.png" alt="pizza">
						<button class="mobile-btn">Выбрать</button>
					</div>
				</div>
				<div class="slider__inner">
					<div class="slider__desc">
						<h1>Маргарита</h1>
						<p>Великолепная, пикантная, горячая итальянская пицца с аппетитным французским сыром.</p>
						<button>Выбрать</button>
					</div>
					<div class="slider__img">
						<img src="./img/pizza.png" alt="pizza">
						<button class="mobile-btn">Выбрать</button>
					</div>
				</div>
			</div>
			<div class="slider-controls">
				<div class="slider-arrows">
					<div class="prev">
					</div>
					<div class="next">
					</div>
				</div>
			</div>
		</div>
		</div>
	</header>
	<section id="choose-pizza">
		<div id="wrapper">
			<div class="choose-inner">
				<h1>Выбрать пиццу</h1>
				<div class="slider-pizza">
					<div class="slider-pizza__inner">
						<div class="pizza__wallpage">
							<img src="./uploads/pizza-1.png" alt="pizza">
							<div class="buttons size">
								<button>26</button>
								<button>32</button>
							</div>
							<p class="price" data-price="1345">1 345 тг.</p>
						</div>
						<div class="pizza__desc">
							<h4>Неаполитана, 26 СМ</h4>
							<p class="desc">Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.</p>
							<p class="consist">
								<span>Состав:</span>сыр, грибы, чеснок, острый перец, еще длинное наименование</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
					<div class="slider-pizza__inner">
						<div class="pizza__wallpage">
							<img src="./img/pizza-2.png" alt="pizza">
							<div class="buttons">
								<button>26</button>
								<button>32</button>
							</div>
							<p class="price" data-price="1345">1 345 тг.</p>
						</div>
						<div class="pizza__desc">
							<h4>Веганская, 26 СМ</h4>
							<p class="desc">Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.</p>
							<p class="consist">
								<span>Состав:</span>сыр, грибы, чеснок, острый перец, еще длинное наименование</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
					<div class="slider-pizza__inner">
						<div class="pizza__wallpage">
							<img src="./img/pizza-3.png" alt="pizza">
							<div class="buttons">
								<button>26</button>
								<button>32</button>
							</div>
							<p class="price" data-price="1345">1 345 тг.</p>
						</div>
						<div class="pizza__desc">
							<h4>Неаполитана, 26 СМ</h4>
							<p class="desc">Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.</p>
							<p class="consist">
								<span>Состав:</span>сыр, грибы, чеснок, острый перец, еще длинное наименование</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
					<div class="slider-pizza__inner">
						<div class="pizza__wallpage">
							<img src="./img/pizza-3.png" alt="pizza">
							<div class="buttons">
								<button>26</button>
								<button>32</button>
							</div>
							<p class="price" data-price="1345">1 345 тг.</p>
						</div>
						<div class="pizza__desc">
							<h4>Мега пепперони, 26 СМ</h4>
							<p class="desc">Манящая, свежая, аппетитная классическая Неаполитана скрасит любой вечер в любой компании.</p>
							<p class="consist">
								<span>Состав:</span>сыр, грибы, чеснок, острый перец, еще длинное наименование</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-controls">
					<div class="slider-arrows">
						<div class="prev"></div>
						<div class="next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="snacks">
		<div id="wrapper">
			<div class="snacks__inner">
				<h1>Выбрать закуски</h1>
				<p>Не забудьте выбрать свежие закуски и салаты от нашего шеф-повара,
					<br>которые гармонично дополнят ваше меню сегодня.</p>
				<div class="snacks-slider">
					<div class="snacks-slider-snack">
						<img class="img-responsive" src="./img/salat-1.jpg" alt="salat">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">500 тг</p>
									<p class="weight">100 гр</p>
								</div>
							</div>
							<h4>Шеф-салат</h4>
							<p class="desc">Лучшее дополнение к любому столу из свежих овощей</p>
							<p class="consist">
								<span>Состав:</span> сыр, грибы, чеснок, острый перец, еще длинное наименование
							</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit salad-btn"></button>
							</div>
						</div>
					</div>
					<div class="snacks-slider-snack">
						<img class="img-responsive" src="./img/salat-1.jpg" alt="salat">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">500 тг</p>
									<p class="weight">100 гр</p>
								</div>
							</div>
							<h4>Цезарь с семгой</h4>
							<p class="desc">Лучшее дополнение к любому столу из свежих овощей</p>
							<p class="consist">
								<span>Состав:</span> сыр, грибы, чеснок, острый перец, еще длинное наименование
							</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit salad-btn"></button>
							</div>
						</div>
					</div>
					<div class="snacks-slider-snack">
						<img class="img-responsive" src="./img/salat-1.jpg" alt="salad">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">500 тг</p>
									<p class="weight">100 гр</p>
								</div>
							</div>
							<h4>Сaлат греческий</h4>
							<p class="desc">Лучшее дополнение к любому столу из свежих овощей</p>
							<p class="consist">
								<span>Состав:</span> сыр, грибы, чеснок, острый перец, еще длинное наименование
							</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit salad-btn"></button>
							</div>
						</div>
					</div>
					<div class="snacks-slider-snack">
						<img class="img-responsive" src="./img/salat-1.jpg" alt="salat">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">500 тг</p>
									<p class="weight">100 гр</p>
								</div>
							</div>
							<h4>Чука сарада</h4>
							<p class="desc">Лучшее дополнение к любому столу из свежих овощей</p>
							<p class="consist">
								<span>Состав:</span> сыр, грибы, чеснок, острый перец, еще длинное наименование
							</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit salad-btn"></button>
							</div>
						</div>
					</div>
					<div class="snacks-slider-snack">
						<img class="img-responsive" src="./img/salat-1.jpg" alt="salat">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">500 тг</p>
									<p class="weight">100 гр</p>
								</div>
							</div>
							<h4>Куриный</h4>
							<p class="desc">Лучшее дополнение к любому столу из свежих овощей</p>
							<p class="consist">
								<span>Состав:</span> сыр, грибы, чеснок, острый перец, еще длинное наименование
							</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit salad-btn"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-controls">
					<div class="slider-arrows">
						<div class="prev">
						</div>
						<div class="next">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- СЕКЦИЯ НАПИТКОВ -->
	<section id="beverages">
		<div id="wrapper">
			<div class="beverages__inner">
				<h1>Выбрать закуски</h1>
				<p>Не забудьте выбрать свежие закуски и салаты от нашего шеф-повара,
					<br>которые гармонично дополнят ваше меню сегодня.</p>
				<div class="beverages-slider">
					<div class="beverages-slider__inner">
						<img src="./img/coca-cocal.png" alt="coca-cola">
						<h4>Coca-Cola, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
					<div class="beverages-slider__inner">
						<img src="./img/schweppes.png" alt="schweppes">
						<h4>Schweppes, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
					<div class="beverages-slider__inner">
						<img src="./img/sprite.png" alt="sprite">
						<h4>Спрайт, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
					<div class="beverages-slider__inner">
						<img src="./img/fanta.png" alt="sprite">
						<h4>Fanta, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn  bev-btn bvg-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
					<div class="beverages-slider__inner">
						<img src="./img/rich-orange.png" alt="sprite">
						<h4>Сok Rich, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
					<div class="beverages-slider__inner">
						<img src="./img/water.png" alt="sprite">
						<h4>Bon Aqua, 1,5 л.</h4>
						<p class="price" data-price="180">180 тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
				</div>
				<div class="slider-controls">
					<div class="slider-arrows">
						<div class="prev">
						</div>
						<div class="next">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="dp">
		<div id="wrapper">
			<div class="dp__inner">
				<h1>Доставка и оплата</h1>
				<p>Не зависимо от того, какой сейчас час, какая погода и как далеко вы живете - наша оперативная доставка с радостью привезет
					вам заказ в любое время и по любому адресу г. Актау.</p>
			</div>
		</div>
	</section>
	<section id="form">
		<div id="wrapper">
			<div class="form__inner">
				<form action="javascript:void(0)">
					<div class="form">
						<h1>Адрес и время доставки</h1>
						<p>Пожалуйста, выберите удобную дату и время доставки, введите ваш полный адрес и телефон, чтобы мы могли убедиться в
							том, что ваш заказ нашел вас:</p>
						<div class="form-input">
							<div class="form-input__inner">
								<label for="">Дата доставки:</label>
								<input type="text" id="date-of-order" placeholder="" value="">
							</div>
							<div class="form-input__inner">
								<label for="">Время доставки:</label>
								<input type="text" id="time-to-order">
							</div>
						</div>
						<div class="form-input">
							<div class="form-input__inner">
								<label for="">Ваше имя:</label>
								<input type="text" id="order-name">
							</div>
							<div class="form-input__inner">
								<label for="">Ваш телефон:</label>
								<input type="text" id="order-phone" placeholder="+7">
							</div>
						</div>
						<label for="">Адрес доставки:</label>
						<input type="text" id="order-address">
						<label for="">Комментарий к заказу:</label>
						<input type="text" id="comments">
					</div>
					<!-- -------------------------------- -->
					<div class="form-tab" id="tab">
						<div class="tab">
							<div class="tab-inner">
								<h1>Ваш
									<span>заказ</span>
								</h1>
								<div class="tab-inner__orders">
									<div id="app">
										<ul>
											<!-- <li><button class="removeItem">&#10006</button>Пицца "Пепперони"...........................1 шт. / 1330 тг.</li> -->
										</ul>
									</div>
								</div>
								<div class="tab-inner__buttons">
									<p>Итого:
										<span class="total-price">0 тг</span>
									</p>
									<div class="buttons">
										<button class="reset">&#10006; Сбросить</button>
										<button class="addToCart">Оформить</button>
									</div>
								</div>
							</div>
						</div>
				</form>
				</div>
			</div>
	</section>
	<footer id="footer">
		<div id="wrapper">
			<div class="footer__inner">
				<div class="footer-address">
					<h4>Italiano Ресторан</h4>
					<p>Моментальная доставка свежей горячей пиццы прямо к вам одмой или в офис.</p>
					<ul>
						<li class="msg">
							<a href="#">aktau.pizzanadom@yandex.kz</a>
						</li>
						<li class="tel">
							<a href="tel:877777777">+7 (727) 999-99-99</a>
						</li>
						<li class="address">
							<a href="#">Актау, ул Нарызбайбатыр., дом 46а, оф. 345</a>
						</li>
					</ul>
				</div>
				<div class="footer-order">
					<h4>Заказать</h4>
					<ul>
						<li>
							<a href="#">Начало</a>
						</li>
						<li>
							<a href="#">Выбрать пиццу</a>
						</li>
						<li>
							<a href="#">Выбрать закуску</a>
						</li>
						<li>
							<a href="#">Выбрать напитки</a>
						</li>
					</ul>
				</div>
				<div class="footer-gallery">
					<h4>Галерия instagram</h4>
					<div class="gallery">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
						<img src="./img/footer-insta-foto.jpg" alt="instagram">
					</div>
				</div>
				<div class="footer-social">
					<h4>Мы в соц. сетях</h4>
					<ul>
						<li class="facebook">
							<a target="_blank" href="#">Facebook</a>
						</li>
						<li class="instagram">
							<a target="_blank" href="#">Instagram</a>
						</li>
						<li class="vk">
							<a target="_blank" href="#">Вконтакты</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- MODAL  -->
	<div class="remodal" data-remodal-id="checkout" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

		<button data-remodal-action="close" class="remodal-close"></button>
		<div class="remodal-content">
			<h1>Заказать</h1>
			<p class="remodal-body">
				<span class="remodal-name">Клиент,</span>хотите продолжать оформление заказа или войти на личный кабинет?
			</p>
			<p class="remodal-total">Итого:
				<span class="total-price"></span>
			</p>
			<br>
			<button class="fast-btn">Продолжить</button>
			<!-- <a class="cabinet-btn">Войти личный кабинет</a> -->
		</div>
	</div>
	<!-- SUCCESS MODAL -->
	<!-- MODAL  -->
	<div class="remodal" data-remodal-id="success" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

		<button data-remodal-action="close" class="remodal-close"></button>
		<div class="remodal-content">
			<!-- <h1>Заказать</h1> -->
			<p class="remodal-body">
				Спасибо, за покупку ждите звонка от курера!
			</p>
			<!-- <p class="remodal-total">Итого:
				<span class="total-price"></span>
			</p>
			<br>
			<button class="fast-btn">Продолжить</button>
			<a class="cabinet-btn">Войти личный кабинет</a> -->
		</div>
	</div>
	<!-- top arrow button -->
	<a href="javascript:void(0)" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
@endsection
@section('scripts')
<script>
	var token = '{{Session::token() }}';
</script>
@endsection