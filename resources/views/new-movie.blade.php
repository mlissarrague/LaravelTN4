@if ($errors)
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
@endif


<form method="POST" action="/create-movie">
	{{ csrf_field() }}
	<input type="text" required name="title" placeholder="title">
	<input type="text" name="rating" placeholder="rating">
	<input type="text" name="awards" placeholder="awards">
	<input type="date" name="release_date">
	<select name="genre_id">
		<option value="">Genre</option>

		@foreach($genres as $genre)
			<option
				value="{{ $genre->id }}">{{ $genre->name }}</option>
		@endforeach

	</select>

	<button type="submit">Guardar</button>
</form>