@section('header')
	<header>
		<div class="pre_full">
			<div class="container_header">
				<div class="pre_header">
					<div class="log_in">
						<a class="enter">
							<i class="fa fa-user fa-lg"></i>
							Войти
						</a>
						<a class="register">
							Регистрация
							<i class="fa fa-key fa-lg"></i>
						</a>
						<div class="log_out hide">
							<p>
								<i class="fa fa-user fa-lg"></i>
								Здраствуйте, %user_name!
							</p>
							<a>
								<i class="fa fa-sign-out fa-lg"></i>
								Выйти
							</a>
						</div>
					</div>
					<div class="right">
						<a class="devivery_info">
							<i class="fa fa-truck fa-lg"></i>
							Оплата и доставка
						</a>
						<div class="chart_top">
							<a class="chart_ico">
								<i class="fa fa-shopping-cart fa-lg"></i>
								Корзина&nbsp
							</a>
							<p class="counter"> 0.00 руб</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container_header">
			<div class="main_header">
				<div class="logo">
					<a href="/">
						{{HTML::image('img/layout/logo.jpg', 'etm logo')}}
					</a>
				</div>
				<div class="descript">
					<p>Запасные части</p>
					<p>к промышленному оборудованию,</p>
					<p>электрокомпоненты,</p>
					<p>кабель.</p>
				</div>
				<div class="contacts">
					<p class="phone">8 (812) 982 33 54</p>
					<p class="phone">8 (905) 222 33 54</p>
					<div class="delivery_description">
						<p>Доставка по всей России</p>
						<p>и ближним регионам!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container_navbar">
			@yield('navbar')
		</div>	
	</header>
@stop
