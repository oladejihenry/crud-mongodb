<h1>All Posts</h1>
<a href="{{ route('create') }}">Create</a> | <a href="{{ route('categories') }}">All Categories</a>
<hr>
<br>
@foreach ($posts as $post)
Category: <em>{{ $post->category->name }}</em> 
<h3><a href="{{ route('show', $post->id) }}">{{ $post->title }}</a></h3>

<p>{{ $post->body }}</p>
<a href="{{ route('edit', $post->id) }}">Edit</a> |  <a href="{{ route('destroy', $post->id) }}">Delete</a>
<hr>
@endforeach

<style>
  a{
    text-decoration: none;
  }
  a:hover{
    text-decoration: underline;
  }
</style>