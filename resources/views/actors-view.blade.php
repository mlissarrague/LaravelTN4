@extends('template')


@section('content')
	<h1>Actores</h1>

	@foreach($actores_lista as $actor)
		<li>{{ $actor->getFullName() }}</li>
	@endforeach

	{{ $actores_lista->links() }}
@endsection