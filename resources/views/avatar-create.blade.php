<form method="POST" action="/avatar-upload" enctype="multipart/form-data">


	{{ csrf_field() }}

	<input type="file" name="avatar">


	<button type="submit">enviar</button>

</form>
