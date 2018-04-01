<div class="top-header">
    <div class="header-personal__profile">
        <ul>
            <li>
                @guest
                <p href="javascript:void(0)" class="btn-pc">Личный кабинет</p>
                @else
            <p href="javascript:void(0)" class="btn-pc">{{Auth::user()->name}}</p>
                @endguest
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
            @guest
            <div class="registr-form">	
                <form action="javascript:void(0)" name="signin">
                    <h1>Вход в личный кабинет</h1>
                    <input type="text" placeholder="+7" id="loginPhone">
                    <input type="password" placeholder="Пароль" id="password">
                    <button type="submit" id="signin">Войти</button>
                    <a data-remodal-target="signup">Регистрация</a>
                </form>
            </div>
            @else
            <div class="profile-page">
                <h1>Профиль</h1>
                <ul>
                    <li><i class="fas fa-user"></i> {{Auth::user()->name}}</li>
                    <li><i class="fas fa-cart-arrow-down"></i> Заказы
                        <ul class="order-items">
                        @foreach($historyOrder as $order)
                        <li>@foreach(unserialize($order->cart) as $item){{$item['item'].','}} @endforeach Итого: {{$order->totalPrice}} Время: {{$order->dateOfOrder}} {{$order->timeToOrder}} </li>
                        @endforeach
                        </ul>
                    </li>
                <li><i class="fas fa-map-marker"></i> Адресс: {{Auth::user()->address}}</li>
                <li><i class="fas fa-envelope"></i> Email: {{Auth::user()->email}}</li>
                <li><i class="fas fa-mobile"></i> Телефон: {{Auth::user()->phone}}</li>
                @if($giftCount >= 3)
                    <li><a href="/user/gift"><i class="fas fa-gift"></i> Ваш Подарок</a></li>
                @endif
                </ul>
                <button id="edit" data-remodal-target="edit">Редактировать</button>
                <button id="logout">Выйти</button>
            </div> 
            @endguest
        </div>
    </div>
    <div id="wrapper">
        <div class="top-header__inner">
            <div class="top-header__logo">
           <a href="/"><img src="{{URL::to('/img/logo.png')}}" alt="logo">
                <p>Italiano</p>
                <p class="restoran">Ресторан</p>
            </a> 
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