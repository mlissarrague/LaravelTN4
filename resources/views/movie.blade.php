<h3>{{ $message or 'Movies' }}</h3>

<li>Title_: {{ $movie->title }}</li>
<li>Rating: {{ $movie->rating }}</li>
<li>Awards: {{ $movie->awards }}</li>

@foreach($movie->actors as $actor)
	<li> ---- {{ $actor->first_name }} {{ $actor->last_name }}</li>
@endforeach

<a href="/movies">View all</a>