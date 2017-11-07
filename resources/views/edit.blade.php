@if(count($errors))
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
@endif


<br>

<form method="POST" action="/update-movie/{{ $movie->id }}">
	
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<input type="text" name="title"
		placeholder="title" value="{{ old('title', $movie->title) }}">

		
	<input type="text" name="awards"
		placeholder="awards" value="{{ old('awards', $movie->awards) }}">
	<input type="text" name="rating"
		placeholder="rating" value="{{ old('rating', $movie->rating) }}">

	<button type="submit">Send</button>
</form>