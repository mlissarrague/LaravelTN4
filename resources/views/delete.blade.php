<form method="POST" action="/delete-movie/{{ $movie->id }}">
	
	{{ csrf_field() }}
	{{ method_field('DELETE') }}

	<button type="submit">DELETE</button>
</form>