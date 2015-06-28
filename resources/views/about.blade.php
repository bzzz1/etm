@section('body')
	<div class="main_content">
		<div class="about">
			<h1 class="uni_heading">о компании</h1>
			@include('partials/breadcrumbs')
			<div class="texts">
				<div class="left_text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non pariatur inventore corrupti eligendi autem beatae eius quia qui quod iure libero, deserunt delectus explicabo quos, ipsam dolores cumque? Magnam culpa porro vitae assumenda error omnis similique, saepe tempora illum ad sed officia ex eius accusamus, nam ratione! Velit, ducimus, inventore.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quas, dicta ratione voluptatibus earum numquam soluta repellat modi ut doloribus dolor aut nesciunt delectus? Deserunt temporibus, aperiam eveniet possimus cupiditate inventore, expedita id dolorem ad optio modi. Aperiam expedita quae corrupti quis incidunt, id ut similique odit, laborum numquam, assumenda?</p>
				</div>
				<div class="right_text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non pariatur inventore corrupti eligendi autem beatae eius quia qui quod iure libero, deserunt delectus explicabo quos, ipsam dolores cumque? Magnam culpa porro vitae assumenda error omnis similique, saepe tempora illum ad sed officia ex eius accusamus, nam ratione! Velit, ducimus, inventore.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quas, dicta ratione voluptatibus earum numquam soluta repellat modi ut doloribus dolor aut nesciunt delectus? Deserunt temporibus, aperiam eveniet possimus cupiditate inventore, expedita id dolorem ad optio modi. Aperiam expedita quae corrupti quis incidunt, id ut similique odit, laborum numquam, assumenda?</p>
				</div>
			</div>
			<h4>мы поставляем продукцию</h4>
			<div class="producers">
				{{-- <div class="images"> --}}
					{{HTML::image('img/layout/producers_fish.png', 'etm logo')}}
				{{-- </div> --}}
			</div>
			<a href="" class="btn uni_btn to_catalog">перейти к каталогу</a>
			<div class="hello">
				<p>компания вертекс электрокомпоненты рада</p>
				<p> видеть вас среди наших клиентов!</p>
				{{HTML::image('img/layout/logo_about.png', 'etm logo', ['class'=>'logo_about'])}}
			</div>
		</div>
	</div>	
@stop