<h1>All Categories</h1>
<a href="{{ route('createCategory') }}">Create</a> | <a href="{{ route('posts') }}">All Posts</a>
<hr>
@foreach ($categories as $category)
{{-- Category: {{ $post->category->name }} --}}
<h3><a href="{{ route('showCategory',  $category->id) }}">{{ $category->name }}</a></h3>

<a href="{{ route('editCategory', $category->id) }}">Edit</a> |  <a href="{{ route('destroyCategory', $category->id) }}">Delete</a>
<hr>
@endforeach

<style>
  a{
    text-decoration: none;
    color: black;
  }
  a:hover{
    text-decoration: underline;
  }
</style>