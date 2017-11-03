@foreach($lista as $pelicula)
	
	@if (!empty($pelicula->genre))
		<strong>{{ $pelicula->genree->name  }}</strong>
	@endif

	<li>{{ $pelicula->title }}</li>
@endforeach