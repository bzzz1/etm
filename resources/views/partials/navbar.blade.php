@section('navbar')
{{-- UNKOMMENT FOR A SIMPLE STATIC NAVBAR insert name of navbar link into if statement class="@if ($env == 'name') active @end if --}}
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<li class="@if (r() == 'index' || r() == 'estate') active @endif"><a href="/">Главная</a></li>
		<li class="@if (r() == 'about' || r() == 'article') active @endif"><a href="/articles">О компании</a></li>
		<li class="@if (r() == 'items') active @endif"><a href="/how_to">Каталог</a></li>
		<li class="@if (r() == 'articles') active @endif"><a href="/rent_sale">Статьи</a></li>
		<li class="@if (r() == 'news') active @endif"><a href="/selected">Новости</a></li>
		<li class="@if (r() == 'contacts') active @endif"><a href="/contacts">Контакты</a></li>
	</ul>
</nav>
@stop