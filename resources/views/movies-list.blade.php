@extends('template')


@section('content')
	@foreach($peliculas as $pelicula)
		<li><a href="/movie/view/{{ $pelicula->id }}"> {{ $pelicula->title }}</a></li>
	@endforeach




@endsection

@section('pagination')
	{{ $peliculas->links() }}
@endsection