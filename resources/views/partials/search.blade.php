<div class="search">
	<div class="normal">
		{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline index_normal_search')) }}
			{{ Form::text('query', null, ['placeholder'=>"Поиск товаров в каталоге", 'class'=>'form-control index_normal_search_input', 'id' =>'search']) }} 
		{{ Form::close() }}
		<i class="fa fa-search fa-2x"></i>
	</div>
	<div class="double input-group">
		<div class="left">
			{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline index_double_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск товаров в каталоге", 'class'=>'form-control index_double_search_input', 'id' =>'search']) }} 
			{{ Form::close() }}
			<i class="fa fa-search fa-2x"></i>
		</div>
		<div class="right">
			{{Form::select('categoies', ['dfs'=>'fsd', 'sdf'=>'fds'], null, ['class'=>'form-control category_select'])}}
		</div>
	</div>
</div>