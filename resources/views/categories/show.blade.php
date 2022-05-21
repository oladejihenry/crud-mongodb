<h1>{{ $category->name}}</h1>

<h4>All Posts</h4>
@foreach ($posts as $post)
<p class="no"> <a href="{{ route('show', $post->id) }}"> {{ $post->title }} </a></p>
@endforeach

<br>

{{-- <a href="{{ route('createPost',$category->id) }}">Create New Post</a> --}}

<br><br>
<a href="/categories">Back</a>

<style>
  .no a{
    text-decoration: none;
    color: black;
  }
  .no a:hover{
    text-decoration: underline;
  }
  a{
    color: black;
  }
</style>