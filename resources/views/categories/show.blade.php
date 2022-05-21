<h1>{{ $category->name}}</h1>

<h4>All Posts</h4>
<p>  </p>

<a href="{{ route('createPost',$category->id) }}">Create Post</a>