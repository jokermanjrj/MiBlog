
<h1>Create new Post</h1>

<form action="{{ route('post.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<div class="form-group">
			<strong>Title:</strong>
			<br>
			<input type="text" name="title" class="form-control" placeholder="Mi Titulo">
	</div>
	<div class="form-group">
			<strong>Contenido:</strong>
			<br>
			<textarea name="content" class="form-control" placeholder="Mi Contenido"></textarea>
	</div>
    <div class="form-group">
			<strong>Tags:</strong>
			<br>
			<input type="text" name="tags" class="form-control" placeholder="Categoria1,Categoria2">
	</div>
	<button type="submit">Submit</button>
</form>