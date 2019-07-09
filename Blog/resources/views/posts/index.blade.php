<h1>Todos los blogs</h1>

<div>
	@foreach($posts as $post)
		<div style="margin-bottom:10px; border:1px solid black; padding:5px">
			<h2><a href="/post/{{$post->id}}">{{$post->title}}</a></h2>
			<small>{{$post->created_at}}</small>		
			<p>{{$post->content}}</p>
			<small>{{$post->tags}}</small>
			<br>
			<a href="/post/{{$post->id}}/edit">Editar</a>
			<form action="{{ route('post.destroy', $post->id) }}" method="post">
					{{ method_field('DELETE') }}
					@csrf
				<a type="submit" style="color:red">Borrar</a>
			</form>
		</div>
	@endforeach
</div>
