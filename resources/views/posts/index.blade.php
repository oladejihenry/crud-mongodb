<h1>All Posts</h1>
<a href="{{ route('create') }}">Create</a>
<hr>
@foreach ($posts as $post)
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