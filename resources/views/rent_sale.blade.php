@extends('/layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
	<div class="full_green">
		<h1>сдать/продать</h1>
	</div>
	<div class="texts">
		<div class="left_text">
			<p>Вы приняли решение арендовать коттедж за городом. Что нужно для этого сделать?
	Вы можете выбрать на сайте любые из размещённых здесь вариантов домов. Если вы впервые посетили наш сайт, то вы можете либо с помощью раздела «Выбранные дома» отправить интересующие вас варианты нам на почту, либо просто позвоните и мы предложим подходящие варианты сами после того, как вы озвучите ваши пожелания.
	После уточнения консультантом различных параметров он предложит вам посмотреть отобранные объекты. Вам при этом не нужно брать с собой ничего, кроме хорошего настроения.</p>
		</div>
		<div class="right_text">
			<p>Рассмотрев несколько вариантов, вы останавливаетесь на одном. Как только вы определились со своим будущим домом, мы переходим к следующему этапу — заключению сделки. Вы можете скачать шаблон договора аренды для ознакомления с ним заранее.
	Заключив договор, оплатив наши услуги и стоимость аренды коттеджа, вы можете переезжать в новый дом. Там уже все готово для вашего проживания.</p>
		</div>
	</div>
	<div class="full_blue rent_sale_blue">
		{{-- <h3>заполнить форму</h3> --}}
		<div class="apply_form">
			@include('partials/contact_form_on_page')
		</div>
	</div>
@stop