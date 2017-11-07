@if(count($errors))
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
@endif


<br>

<form method="POST" action="/new-movie">
	
	{{ csrf_field() }}

	<input type="text" name="title"
		placeholder="title" value="{{ old('title') }}">


		
	<input type="text" name="awards"
		placeholder="awards" value="{{ old('awards') }}">
	<input type="text" name="rating"
		placeholder="rating" value="{{ old('rating') }}">

	<button type="submit">Send</button>
</form>