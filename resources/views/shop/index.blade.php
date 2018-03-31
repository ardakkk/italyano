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
		@include('partials.header')
		<div class="header-body">
			<div class="slider">
				@foreach($mains as $main)
				<div class="slider__inner">
					<div class="slider__desc">
					<h1>{{$main->title}}</h1>
					<p>{{$main->description}}</p>
						<button>Выбрать</button>
					</div>
					<div class="slider__img">
					<img src="/storage/{{$main->imagePath}}" alt="pizza">
						<button class="mobile-btn">Выбрать</button>
					</div>
				</div>
				@endforeach
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
				@foreach($pizzas as $pizza)
					<div class="slider-pizza__inner">
						<div class="pizza__wallpage">
						<img src="/storage/{{$pizza->imagePath}}" alt="pizza">
							<div class="buttons size">
								<button>26</button>
								<button>32</button>
							</div>
						<p class="price" data-price="1345">{{$pizza->price}} тг</p>
						</div>
						<div class="pizza__desc">
							<h4>{{$pizza->title}}</h4>
						<p class="desc">{{$pizza->description}}</p>
							<p class="consist">
							<span>Состав:</span> {{$pizza->consist}}</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
				@endforeach
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
					@foreach($salads as $salad)
					<div class="snacks-slider-snack">
					<img class="img-responsive" src="/storage/{{$salad->imagePath}}" alt="salad">
						<div class="snack-desc">
							<div class="snack-consist-ellipse">
								<div class="consist-ellipse__inner">
									<p class="price" data-price="500">{{$salad->price}} тг</p>
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
					@endforeach
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
				@foreach($bvgs as $bvg)
					<div class="beverages-slider__inner">
					<img src="/storage/{{$bvg->imagePath}}" alt="coca-cola">
					<h4>{{$bvg->title}}, {{$bvg->weight}} л.</h4>
						<p class="price" data-price="180">{{$bvg->price}} тг</p>
						<button class="choice__btn bev-btn">Выбрать</button>
						<div class="count__pizza">
							<p>Количество</p>
							<input type="number" min="1" placeholder="1" value="1">
							<button class="count__submit bvg-btn"></button>
						</div>
					</div>
				@endforeach
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
						@guest
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
						@endguest
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
										<span class="total-price" id="total-price">0 тг</span>
									</p>
									<div class="buttons">
										<button class="reset">&#10006; Сбросить</button>
										<button id="checkout">Оформить</button>
									</div>
								</div>
							</div>
						</div>
				</form>
				</div>
			</div>
	</section>
	@include('partials.footer')
	<!-- MODAL  -->
	<div class="remodal" data-remodal-id="checkout" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

		<button data-remodal-action="close" class="remodal-close"></button>
		<div class="remodal-content">
			<h1>Заказ</h1>
			<p class="remodal-body">
				<span class="remodal-name">Клиент,</span>хотите продолжать оформление заказа или войти на личный кабинет?
			</p>
			<p class="remodal-total">Итого:
				<span class="total-price"></span>
			</p>
			<br>
			<button class="addToCart fast-btn">Быстрый заказ</button>
			<button class="cabinet-btn">Войти личный кабинет</button> 
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
	{{--  Auth Order Model  --}}
	@auth
	<div class="remodal" data-remodal-id="auth-order" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

			<button data-remodal-action="close" class="remodal-close"></button>
			<div class="remodal-content">
				<!-- <h1>Заказать</h1> -->
				<p class="remodal-body">
				<b>{{Auth::user()->name}}</b> ,xотите заказать?
				</p>
				<p class="auth-order__total"></p>
				<button class="fast-btn" id="user-order">Заказать</button>
				<!-- <p class="remodal-total">Итого:
					<span class="total-price"></span>
				</p>
				<br>
				<button class="fast-btn">Продолжить</button>
				<a class="cabinet-btn">Войти личный кабинет</a> -->
			</div>
		</div>
	@endauth
	{{--  Register Popup  --}}
	<div class="remodal signup-popup" data-remodal-id="signup" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

			<button data-remodal-action="close" class="remodal-close"></button>
			<div class="remodal-content">
				<div class="signup">
					<h1>Регистрация</h1> 
					<form id="formSignup" action="javascript:void(0)">
						<input type="text"  class="signupInput" placeholder="*ФИО" id="signupName">
						<input type="email"  class="signupInput" placeholder="*Email" id="signupEmail" >
						<input type="text"  class="signupInput" placeholder="*Телефон" id="signupPhone">
						<input type="text" class="signupInput"  placeholder="*Адрес" id="signupAddress">
						<input type="password"  class="signupInput" placeholder="*Пароль" id="signupPassword">
						<input type="password" placeholder="*Подтверждение пароля" id="resignupPassword">
						<button class="fast-btn" id="signupBtn">Зарегистрироваться</button>
					</form>
				</div>
				<div class="signup-success">
					<p>Вы успешно зарегистрировались!</p>
				</div>
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