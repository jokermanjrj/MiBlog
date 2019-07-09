
<h1>Edit new Post</h1>

<form action="{{ route('post.update', $post->id) }}" method="post">
	{{ method_field('PUT') }}
	@csrf
	<div class="form-group">
		<div class="form-group">
			<strong>Title:</strong>
			<br>
			<input type="text" name="title" value="{{$post->title}}" class="form-control">
	</div>
	<div class="form-group">
			<strong>Contenido:</strong>
			<br>
			<textarea name="content" class="form-control">{{$post->content}}</textarea>
	</div>
    <div class="form-group">
			<strong>Tags:</strong>
			<br>
			<input type="text" name="tags" class="form-control" value="{{$post->tags}}">
	</div>
	<button type="submit">Editar</button>
</form>